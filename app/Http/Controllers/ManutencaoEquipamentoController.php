<?php

namespace App\Http\Controllers;

use App\Models\ManutencaoEquipamento;
use Illuminate\Http\Request;

class ManutencaoEquipamentoController extends Controller
{
    // Mapeamento de status curtos para nomes completos (como estão na migration)
    private $statusMap = [
        'abertura' => 'aguardando_recebimento',
        'recebimento' => 'aguardando_recebimento',
        'analise' => 'em_analise',
        'garantia' => 'em_garantia',
        'orcamento' => 'orcamento_enviado',
        'pagamento' => 'aguardando_pagamento',
        'manutencao' => 'em_manutencao',
        'concluido' => 'concluido',
        'cancelado' => 'cancelado',
    ];

    private function mapStatus($status)
    {
        return $this->statusMap[$status] ?? $status;
    }

    public function index()
    {
        $equipamentos = ManutencaoEquipamento::orderBy('created_at', 'desc')->get();
        $stats = [
            'total' => ManutencaoEquipamento::whereNotIn('status', ['concluido', 'cancelado'])->count(),
            'aguardando' => ManutencaoEquipamento::where('status', 'aguardando_pagamento')->count(),
            'concluidos' => ManutencaoEquipamento::where('status', 'concluido')->whereMonth('data_saida', now()->month)->count(),
            'cancelados' => ManutencaoEquipamento::where('status', 'cancelado')->count(),
        ];
        
        return view('pages.manutencao', compact('equipamentos', 'stats'));
    }

    public function getStats()
    {
        return response()->json([
            'total' => ManutencaoEquipamento::whereNotIn('status', ['concluido', 'cancelado'])->count(),
            'aguardando' => ManutencaoEquipamento::where('status', 'pagamento')->count(),
            'concluidos' => ManutencaoEquipamento::where('status', 'concluido')->whereMonth('data_saida', now()->month)->count(),
            'cancelados' => ManutencaoEquipamento::where('status', 'cancelado')->count(),
        ]);
    }

    public function getTableData()
    {
        $equipamentos = ManutencaoEquipamento::orderBy('created_at', 'desc')->get();
        return response()->json($equipamentos->map(function($item) {
            return [
                'id' => $item->id,
                'rma' => $item->rma,
                'cliente' => $item->cliente,
                'equipamento' => $item->equipamento,
                'modelo' => $item->modelo,
                'status' => $item->status,
                'data_entrada' => $item->data_entrada->format('d/m/Y'),
            ];
        }));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente' => 'required|string|max:255',
            'equipamento' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'numero_serie' => 'nullable|string',
            'rma' => 'required|string|unique:manutencao_equipamentos',
            'data_entrada' => 'required|date',
            'observacoes' => 'nullable|string',
        ]);
        
        $validated['user_id'] = auth()->id();
        $validated['status'] = 'aguardando_recebimento'; // Status inicial correto da migration
        
        $equipamento = ManutencaoEquipamento::create($validated);
        
        return response()->json(['success' => true, 'rma' => $equipamento->rma]);
    }

    public function avancarEstagio(Request $request, $id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        
        // Mapear o status curto para o nome completo
        $statusMapeado = $this->mapStatus($request->status);
        
        $equipamento->update([
            'status' => $statusMapeado,
            'valor_orcamento' => $request->valor_orcamento,
            'laudo_tecnico' => $request->laudo_tecnico,
            'data_saida' => $statusMapeado === 'concluido' ? now() : $equipamento->data_saida,
        ]);
        
        return response()->json(['success' => true]);
    }

    public function cancelar($id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        $equipamento->update(['status' => 'cancelado']);
        
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        
        $validated = $request->validate([
            'cliente' => 'sometimes|string|max:255',
            'equipamento' => 'sometimes|string|max:255',
            'modelo' => 'sometimes|string|max:255',
            'numero_serie' => 'nullable|string',
            'status' => 'sometimes|in:aguardando_recebimento,em_analise,em_garantia,orcamento_enviado,aguardando_pagamento,em_manutencao,concluido,cancelado',
            'valor_orcamento' => 'nullable|numeric',
            'laudo_tecnico' => 'nullable|string',
            'observacoes' => 'nullable|string',
        ]);

        $equipamento->update($validated);

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        $equipamento->delete();
        
        return response()->json(['success' => true]);
    }

    public function baixa(Request $request, $id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        
        $equipamento->update([
            'status' => 'concluido',
            'data_saida' => now(),
            'laudo_tecnico' => $request->laudo_tecnico ?? $equipamento->laudo_tecnico,
        ]);

        return response()->json(['success' => true]);
    }
}