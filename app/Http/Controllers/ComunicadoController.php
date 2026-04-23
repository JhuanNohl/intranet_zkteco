<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    public function index()
    {
        $comunicados = Comunicado::orderBy('created_at', 'desc')->paginate(10);
        return view('comunicados.index', compact('comunicados'));
    }

    public function create()
    {
        return view('comunicados.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'autor' => 'nullable|string|max:100',
            'ativo' => 'boolean',
            'data_validade' => 'nullable|date',
            'ordem' => 'nullable|integer'
        ]);

        // Se não definiu autor, usar o nome do usuário logado
        if (empty($validated['autor'])) {
            $validated['autor'] = auth()->user()->name;
        }

        Comunicado::create($validated);

        return redirect()->route('comunicados.index')
            ->with('success', 'Comunicado criado com sucesso!');
    }

    public function edit(Comunicado $comunicado)
    {
        return view('comunicados.edit', compact('comunicado'));
    }

    public function update(Request $request, Comunicado $comunicado)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'autor' => 'nullable|string|max:100',
            'ativo' => 'boolean',
            'data_validade' => 'nullable|date',
            'ordem' => 'nullable|integer'
        ]);

        $comunicado->update($validated);

        return redirect()->route('comunicados.index')
            ->with('success', 'Comunicado atualizado com sucesso!');
    }

    public function destroy(Comunicado $comunicado)
    {
        $comunicado->delete();

        return redirect()->route('comunicados.index')
            ->with('success', 'Comunicado removido com sucesso!');
    }
}
