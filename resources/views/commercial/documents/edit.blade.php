@extends('layouts.app')

@section('title', 'Adicionar Documento Comercial')

@section('content')
    <div class="container">
        <h1>Editar Documento</h1>
        <form action="{{ route('commercial.documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" required>
                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" rows="2">{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                    name="category" value="{{ old('category') }}" required>
                <small class="form-text text-muted">Ex: Processos e Fluxos, Formulários, Manuais, Sistemas e Links,
                    Parceiros e Atendimento</small>
                @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="typeFile" value="file" {{ old('type') == 'file' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="typeFile">Arquivo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="typeLink" value="link" {{ old('type') == 'link' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="typeLink">Link</label>
                    </div>
                </div>
            </div>
            <div class="mb-3" id="fileInput">
                <label for="file" class="form-label">Arquivo</label>
                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file"
                    accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx">
                @error('file') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3 d-none" id="linkInput">
                <label for="external_url" class="form-label">URL</label>
                <input type="url" class="form-control @error('external_url') is-invalid @enderror" id="external_url"
                    name="external_url" value="{{ old('external_url') }}">
                @error('external_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <button type="submit" class="btn btn-success">
                <i class="bi bi-check-lg me-2"></i>Salvar
            </button>
            <a href="{{ route('comercial') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-2"></i>Cancelar
            </a>
        </form>
    </div>

    @push('scripts')
        <script>
            document.querySelectorAll('input[name="type"]').forEach(radio => {
                radio.addEventListener('change', function () {
                    if (this.value === 'file') {
                        document.getElementById('fileInput').classList.remove('d-none');
                        document.getElementById('linkInput').classList.add('d-none');
                        document.getElementById('file').required = true;
                        document.getElementById('external_url').required = false;
                    } else {
                        document.getElementById('fileInput').classList.add('d-none');
                        document.getElementById('linkInput').classList.remove('d-none');
                        document.getElementById('file').required = false;
                        document.getElementById('external_url').required = true;
                    }
                });
            });
            // Trigger on load if old value exists
            let selected = document.querySelector('input[name="type"]:checked');
            if (selected) selected.dispatchEvent(new Event('change'));
        </script>
    @endpush
@endsection