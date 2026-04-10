@extends('layouts.app')

@section('title', isset($treinamento) ? 'Editar Treinamento' : 'Novo Treinamento')

@section('content')
<div class="mb-4">
    <h1><i class="bi bi-link-45deg me-2"></i>{{ isset($treinamento) ? 'Editar' : 'Novo' }} Treinamento</h1>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ isset($treinamento) ? route('admin.treinamentos.update', $treinamento->id) : route('admin.treinamentos.store') }}" 
              method="POST">
            @csrf
            @if(isset($treinamento)) @method('PUT') @endif

            <div class="row">
                <div class="col-md-8 mb-3">
                    <label class="form-label">Título *</label>
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $treinamento->titulo ?? '') }}" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-label">Ordem</label>
                    <input type="number" name="ordem" class="form-control" value="{{ old('ordem', $treinamento->ordem ?? 0) }}">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-label">Categoria *</label>
                    <select name="categoria" class="form-control" required>
                        <option value="tecnico" {{ (old('categoria', $treinamento->categoria ?? '') == 'tecnico') ? 'selected' : '' }}>Técnico</option>
                        <option value="comercial" {{ (old('categoria', $treinamento->categoria ?? '') == 'comercial') ? 'selected' : '' }}>Comercial</option>
                        <option value="gestao" {{ (old('categoria', $treinamento->categoria ?? '') == 'gestao') ? 'selected' : '' }}>Gestão</option>
                        <option value="redes" {{ (old('categoria', $treinamento->categoria ?? '') == 'redes') ? 'selected' : '' }}>Redes</option>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">URL *</label>
                    <input type="url" name="url" class="form-control" value="{{ old('url', $treinamento->url ?? '') }}" required>
                    <small class="text-muted">Ex: https://www.youtube.com/watch?v=... ou https://drive.google.com/...</small>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea name="descricao" class="form-control" rows="3">{{ old('descricao', $treinamento->descricao ?? '') }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check">
                        <input type="checkbox" name="abrir_nova_aba" class="form-check-input" value="1" 
                               {{ (old('abrir_nova_aba', $treinamento->abrir_nova_aba ?? true) ? 'checked' : '') }}>
                        <label class="form-check-label">Abrir em nova aba</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check">
                        <input type="checkbox" name="ativo" class="form-check-input" value="1" 
                               {{ (old('ativo', $treinamento->ativo ?? true) ? 'checked' : '') }}>
                        <label class="form-check-label">Ativo (visível para usuários)</label>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('admin.treinamentos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection