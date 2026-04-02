<?php

namespace App\Http\Controllers;

use App\Models\CommercialDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
        if (Gate::denies('create', CommercialDocument::class)) {
            abort(403, 'Você não tem permissão para adicionar documentos.');
        }
        
        return view('commercial.documents.create');
    }

    public function store(Request $request)
    {
        Log::info('Store method called', $request->all());
        
        if (Gate::denies('create', CommercialDocument::class)) {
            abort(403, 'Você não tem permissão para adicionar documentos.');
        }
        
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'type' => 'required|in:file,link',
        ];
        
        if ($request->type === 'file') {
            $rules['file'] = 'required|file|mimes:pdf,doc,docx,xlsx,xls,ppt,pptx|max:10240';
        } else {
            $rules['external_url'] = 'required|url|max:255';
        }
        
        $validated = $request->validate($rules);
        
        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'category' => $validated['category'],
            'type' => $validated['type'],
            'created_by' => auth()->id(),
            'updated_by' => null,
        ];

        if ($validated['type'] === 'file') {
            $path = $request->file('file')->store('commercial_documents', 'public');
            $data['file_path'] = $path;
            $data['external_url'] = null;
        } else {
            $data['external_url'] = $validated['external_url'];
            $data['file_path'] = null;
        }

        $document = CommercialDocument::create($data);

        return redirect()->route('comercial')
            ->with('success', 'Documento criado com sucesso.');
    }

    public function edit($id)
    {
        $commercialDocument = CommercialDocument::findOrFail($id);
        
        if (Gate::denies('update', $commercialDocument)) {
            abort(403, 'Você não tem permissão para editar este documento.');
        }
        
        return view('commercial.documents.edit', compact('commercialDocument'));
    }

    public function update(Request $request, $id)
    {
        $commercialDocument = CommercialDocument::findOrFail($id);
        
        Log::info('Update method called for ID: ' . $id);
        
        if (Gate::denies('update', $commercialDocument)) {
            abort(403, 'Você não tem permissão para editar este documento.');
        }
        
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'type' => 'required|in:file,link',
        ];
        
        if ($request->type === 'file') {
            $rules['file'] = 'nullable|file|mimes:pdf,doc,docx,xlsx,xls,ppt,pptx|max:10240';
        } else {
            $rules['external_url'] = 'required|url|max:255';
        }
        
        $validated = $request->validate($rules);
        
        $data = [
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'category' => $validated['category'],
            'type' => $validated['type'],
            'updated_by' => auth()->id(),
        ];

        if ($validated['type'] === 'file') {
            if ($request->hasFile('file')) {
                if ($commercialDocument->file_path) {
                    Storage::disk('public')->delete($commercialDocument->file_path);
                }
                $path = $request->file('file')->store('commercial_documents', 'public');
                $data['file_path'] = $path;
            } else {
                $data['file_path'] = $commercialDocument->file_path;
            }
            $data['external_url'] = null;
        } else {
            $data['external_url'] = $validated['external_url'];
            if ($commercialDocument->file_path) {
                Storage::disk('public')->delete($commercialDocument->file_path);
            }
            $data['file_path'] = null;
        }

        $commercialDocument->update($data);

        return redirect()->route('comercial')
            ->with('success', 'Documento atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $commercialDocument = CommercialDocument::findOrFail($id);
        
        Log::info('Destroy method called for ID: ' . $id);
        
        if (Gate::denies('delete', $commercialDocument)) {
            abort(403, 'Você não tem permissão para excluir este documento.');
        }
        
        if ($commercialDocument->type === 'file' && $commercialDocument->file_path) {
            Storage::disk('public')->delete($commercialDocument->file_path);
        }
        
        $commercialDocument->delete();

        return redirect()->route('comercial')
            ->with('success', 'Documento removido com sucesso.');
    }
}