<?php

namespace App\Http\Controllers;

use App\Models\CommercialDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CommercialDocumentController extends Controller
{
    public function index()
    {
        $documents = CommercialDocument::with('creator')->orderBy('category')->get();
        $categories = CommercialDocument::distinct()->pluck('category');
        return view('commercial.documents.index', compact('documents', 'categories'));
    }

    public function create()
    {
        // Verifica permissão usando Gate
        if (Gate::denies('create', CommercialDocument::class)) {
            abort(403, 'Você não tem permissão para adicionar documentos.');
        }
        
        return view('commercial.documents.create');
    }

    public function store(Request $request)
    {
        // Verifica permissão
        if (Gate::denies('create', CommercialDocument::class)) {
            abort(403, 'Você não tem permissão para adicionar documentos.');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'type' => 'required|in:file,link',
            'file' => 'required_if:type,file|file|mimes:pdf,doc,docx,xlsx,xls,ppt,pptx|max:10240',
            'external_url' => 'required_if:type,link|url|max:255',
        ]);

        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category' => $validated['category'],
            'type' => $validated['type'],
            'created_by' => auth()->id(),
        ];

        if ($validated['type'] === 'file') {
            $path = $request->file('file')->store('commercial_documents', 'public');
            $data['file_path'] = $path;
        } else {
            $data['external_url'] = $validated['external_url'];
        }

        CommercialDocument::create($data);

        // Redireciona para a página comercial
        return redirect()->route('comercial')
            ->with('success', 'Documento criado com sucesso.');
    }

    public function edit(CommercialDocument $commercialDocument)
    {
        // Verifica permissão para editar este documento específico
        if (Gate::denies('update', $commercialDocument)) {
            abort(403, 'Você não tem permissão para editar este documento.');
        }
        
        return view('commercial.documents.edit', compact('commercialDocument'));
    }

    public function update(Request $request, CommercialDocument $commercialDocument)
    {
        // Verifica permissão para atualizar este documento específico
        if (Gate::denies('update', $commercialDocument)) {
            abort(403, 'Você não tem permissão para editar este documento.');
        }
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'type' => 'required|in:file,link',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xlsx,xls,ppt,pptx|max:10240',
            'external_url' => 'required_if:type,link|url|max:255',
        ]);

        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category' => $validated['category'],
            'type' => $validated['type'],
            'updated_by' => auth()->id(),
        ];

        // Se for arquivo e foi enviado novo arquivo
        if ($validated['type'] === 'file') {
            if ($request->hasFile('file')) {
                // Apaga o arquivo antigo se existir
                if ($commercialDocument->file_path) {
                    Storage::disk('public')->delete($commercialDocument->file_path);
                }
                $path = $request->file('file')->store('commercial_documents', 'public');
                $data['file_path'] = $path;
                $data['external_url'] = null;
            } else {
                $data['file_path'] = $commercialDocument->file_path;
                $data['external_url'] = null;
            }
        } else {
            $data['external_url'] = $validated['external_url'];
            $data['file_path'] = null;
            // Se havia arquivo antigo, apaga
            if ($commercialDocument->file_path) {
                Storage::disk('public')->delete($commercialDocument->file_path);
            }
        }

        $commercialDocument->update($data);

        // Redireciona para a página comercial
        return redirect()->route('comercial')
            ->with('success', 'Documento atualizado com sucesso.');
    }

    public function destroy(CommercialDocument $commercialDocument)
    {
        // Verifica permissão para excluir este documento específico
        if (Gate::denies('delete', $commercialDocument)) {
            abort(403, 'Você não tem permissão para excluir este documento.');
        }
        
        if ($commercialDocument->type === 'file' && $commercialDocument->file_path) {
            Storage::disk('public')->delete($commercialDocument->file_path);
        }
        $commercialDocument->delete();

        // Redireciona para a página comercial
        return redirect()->route('comercial')
            ->with('success', 'Documento removido com sucesso.');
    }
}