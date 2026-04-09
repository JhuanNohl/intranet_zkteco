<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use App\Models\Equipamento;
use App\Models\Compatibilidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntegracaoController extends Controller
{
    /**
     * Matriz de compatibilidades (dashboard principal)
     */
    public function matriz()
    {
        $sistemas = Sistema::orderBy('nome')->get();
        $equipamentos = Equipamento::orderBy('modelo')->get();
        
        // Criar array associativo para acesso rápido
        $matriz = [];
        $compatibilidades = Compatibilidade::with(['sistema', 'equipamento'])->get();
        
        foreach ($compatibilidades as $comp) {
            $matriz[$comp->sistema_id][$comp->equipamento_id] = $comp->observacao;
        }
        
        return view('integracoes.matriz', compact('sistemas', 'equipamentos', 'matriz'));
    }
    
    /**
     * Listagem paginada de equipamentos
     */
    public function index()
    {
        $equipamentos = Equipamento::with('sistemas')->paginate(20);
        return view('integracoes.index', compact('equipamentos'));
    }
    
    /**
     * Formulário de criação de equipamento
     */
    public function create()
    {
        $sistemas = Sistema::all();
        return view('integracoes.create', compact('sistemas'));
    }
    
    /**
     * Salvar novo equipamento
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|unique:equipamentos,modelo',
            'compatibilidades' => 'array',
            'compatibilidades.*' => 'nullable|string'
        ]);
        
        DB::transaction(function () use ($request) {
            $equipamento = Equipamento::create(['modelo' => $request->modelo]);
            
            if ($request->has('compatibilidades')) {
                foreach ($request->compatibilidades as $sistemaId => $observacao) {
                    if (!empty($observacao)) {
                        Compatibilidade::create([
                            'sistema_id' => $sistemaId,
                            'equipamento_id' => $equipamento->id,
                            'observacao' => $observacao
                        ]);
                    }
                }
            }
        });
        
        return redirect()->route('integracoes.index')
            ->with('success', 'Equipamento cadastrado com sucesso!');
    }
    
    /**
     * Formulário de edição
     */
    public function edit(Equipamento $equipamento)
    {
        $sistemas = Sistema::all();
        $compatibilidades = $equipamento->sistemas->pluck('pivot.observacao', 'id')->toArray();
        
        return view('integracoes.edit', compact('equipamento', 'sistemas', 'compatibilidades'));
    }
    
    /**
     * Atualizar equipamento
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        $request->validate([
            'modelo' => 'required|string|unique:equipamentos,modelo,' . $equipamento->id,
            'compatibilidades' => 'array'
        ]);
        
        DB::transaction(function () use ($request, $equipamento) {
            $equipamento->update(['modelo' => $request->modelo]);
            
            // Atualizar compatibilidades
            $equipamento->sistemas()->detach();
            
            if ($request->has('compatibilidades')) {
                foreach ($request->compatibilidades as $sistemaId => $observacao) {
                    if (!empty($observacao)) {
                        $equipamento->sistemas()->attach($sistemaId, ['observacao' => $observacao]);
                    }
                }
            }
        });
        
        return redirect()->route('integracoes.index')
            ->with('success', 'Equipamento atualizado com sucesso!');
    }
    
    /**
     * Excluir equipamento
     */
    public function destroy(Equipamento $equipamento)
    {
        $equipamento->delete();
        
        return redirect()->route('integracoes.index')
            ->with('success', 'Equipamento excluído com sucesso!');
    }
    
    /**
     * API: Atualizar célula individual (AJAX)
     */
    public function updateCelula(Request $request, $sistemaId, $equipamentoId)
    {
        $request->validate([
            'observacao' => 'nullable|string'
        ]);
        
        $compatibilidade = Compatibilidade::updateOrCreate(
            [
                'sistema_id' => $sistemaId,
                'equipamento_id' => $equipamentoId
            ],
            ['observacao' => $request->observacao]
        );
        
        return response()->json(['success' => true, 'data' => $compatibilidade]);
    }
    
    /**
     * Exportar matriz como CSV
     */
    public function export()
    {
        $sistemas = Sistema::orderBy('nome')->get();
        $equipamentos = Equipamento::orderBy('modelo')->get();
        
        $filename = 'integracoes_' . date('Y-m-d_His') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($sistemas, $equipamentos) {
            $file = fopen('php://output', 'w');
            
            // BOM para UTF-8
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            
            // Cabeçalho
            $header = ['Equipamento \\ Sistema'];
            foreach ($sistemas as $sistema) {
                $header[] = $sistema->nome;
            }
            fputcsv($file, $header, ';');
            
            // Dados
            foreach ($equipamentos as $equip) {
                $row = [$equip->modelo];
                foreach ($sistemas as $sistema) {
                    $comp = Compatibilidade::where('sistema_id', $sistema->id)
                                           ->where('equipamento_id', $equip->id)
                                           ->first();
                    $row[] = $comp ? $comp->observacao : '';
                }
                fputcsv($file, $row, ';');
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }
}