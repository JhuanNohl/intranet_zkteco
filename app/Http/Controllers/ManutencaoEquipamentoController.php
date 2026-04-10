<?php

namespace App\Http\Controllers;

use App\Models\ManutencaoEquipamento;
use Illuminate\Http\Request;

class ManutencaoEquipamentoController extends Controller
{
    public function index()
    {
        $equipamentos = ManutencaoEquipamento::orderBy('created_at', 'desc')->get();
        $stats = [
            'total' => ManutencaoEquipamento::whereNotIn('status', ['concluido', 'cancelado'])->count(),
            'aguardando' => ManutencaoEquipamento::where('status', 'pagamento')->count(),
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
        $validated['status'] = 'abertura';
        
        $equipamento = ManutencaoEquipamento::create($validated);
        
        return response()->json(['success' => true, 'rma' => $equipamento->rma]);
    }

    public function avancarEstagio(Request $request, $id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        $equipamento->update([
            'status' => $request->status,
            'valor_orcamento' => $request->valor_orcamento,
            'laudo_tecnico' => $request->laudo_tecnico,
            'data_saida' => $request->status === 'concluido' ? now() : $equipamento->data_saida,
        ]);
        
        return response()->json(['success' => true]);
    }

    public function cancelar($id)
    {
        $equipamento = ManutencaoEquipamento::findOrFail($id);
        $equipamento->update(['status' => 'cancelado']);
        
        return response()->json(['success' => true]);
    }
}