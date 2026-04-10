<?php

namespace App\Http\Controllers;

use App\Models\Treinamento;
use Illuminate\Http\Request;

class TreinamentoController extends Controller
{
    // Página pública (todos os usuários)
    public function index()
    {
        $treinamentos = Treinamento::where('ativo', true)
            ->orderBy('ordem')
            ->orderBy('titulo')
            ->get()
            ->map(function($item) {
                $item->concluido = $item->isConcluido();
                $item->favorito = $item->isFavorito();
                return $item;
            });

        return view('pages.treinamentos', compact('treinamentos'));
    }

    // ========== MÉTODOS PARA ADMIN ==========
    public function adminIndex()
    {
        $treinamentos = Treinamento::orderBy('ordem')->orderBy('titulo')->get();
        return view('admin.treinamentos.index', compact('treinamentos'));
    }

    public function create()
    {
        return view('admin.treinamentos.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'url' => 'required|url',
            'categoria' => 'required|string',
            'icone' => 'nullable|string',
            'ordem' => 'nullable|integer',
        ]);

        $validated['abrir_nova_aba'] = $request->has('abrir_nova_aba');
        $validated['ativo'] = $request->has('ativo');
        
        Treinamento::create($validated);

        return redirect()->route('admin.treinamentos.index')
            ->with('success', 'Treinamento criado com sucesso!');
    }

    public function edit($id)
    {
        $treinamento = Treinamento::findOrFail($id);
        return view('admin.treinamentos.form', compact('treinamento'));
    }

    public function update(Request $request, $id)
    {
        $treinamento = Treinamento::findOrFail($id);
        
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'url' => 'required|url',
            'categoria' => 'required|string',
            'icone' => 'nullable|string',
            'ordem' => 'nullable|integer',
        ]);

        $validated['abrir_nova_aba'] = $request->has('abrir_nova_aba');
        $validated['ativo'] = $request->has('ativo');
        
        $treinamento->update($validated);

        return redirect()->route('admin.treinamentos.index')
            ->with('success', 'Treinamento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $treinamento = Treinamento::findOrFail($id);
        $treinamento->delete();
        
        return redirect()->route('admin.treinamentos.index')
            ->with('success', 'Treinamento removido!');
    }

    // ========== AÇÕES DOS USUÁRIOS ==========
    public function concluir(Request $request, $id)
    {
        $treinamento = Treinamento::findOrFail($id);
        
        if ($request->concluido) {
            $treinamento->concluidoPor()->attach(auth()->id(), ['concluido_em' => now()]);
        } else {
            $treinamento->concluidoPor()->detach(auth()->id());
        }
        
        return response()->json(['success' => true]);
    }

    public function favoritar($id)
    {
        $treinamento = Treinamento::findOrFail($id);
        
        if ($treinamento->isFavorito()) {
            $treinamento->favoritoPor()->detach(auth()->id());
            $favorito = false;
        } else {
            $treinamento->favoritoPor()->attach(auth()->id());
            $favorito = true;
        }
        
        return response()->json(['success' => true, 'favorito' => $favorito]);
    }
}