@extends('layouts.app')

@section('title', 'Adicionar Documento Comercial')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="bi bi-plus-circle me-2"></i>
                            Adicionar Documento Comercial
                        </h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('commercial.documents.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">Título *</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Descrição</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                    rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Categoria *</label>
                                <select name="category" class="form-control @error('category') is-invalid @enderror"
                                    required>
                                    <option value="">Selecione</option>
                                    <option value="Processos e Fluxos" {{ old('category') == 'Processos e Fluxos' ? 'selected' : '' }}>Processos e Fluxos</option>
                                    <option value="Formulários" {{ old('category') == 'Formulários' ? 'selected' : '' }}>
                                        Formulários</option>
                                    <option value="Manuais" {{ old('category') == 'Manuais' ? 'selected' : '' }}>Manuais
                                    </option>
                                    <option value="Sistemas e Links" {{ old('category') == 'Sistemas e Links' ? 'selected' : '' }}>Sistemas e Links</option>
                                    <option value="Parceiros e Atendimento" {{ old('category') == 'Parceiros e Atendimento' ? 'selected' : '' }}>Parceiros e Atendimento</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Tipo *</label>
                                <div class="form-check">
                                    <input type="radio" name="type" value="link" id="typeLink" class="form-check-input" {{ old('type', 'link') == 'link' ? 'checked' : '' }}>
                                    <label for="typeLink" class="form-check-label">
                                        <i class="bi bi-link-45deg"></i> Link (URL)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="type" value="file" id="typeFile" class="form-check-input" {{ old('type') == 'file' ? 'checked' : '' }}>
                                    <label for="typeFile" class="form-check-label">
                                        <i class="bi bi-file-earmark-pdf"></i> Arquivo
                                    </label>
                                </div>
                            </div>

                            <!-- Campo para URL (Link) -->
                            <div class="mb-3" id="urlField">
                                <label class="form-label fw-bold">URL do Link *</label>
                                <input type="url" name="external_url"
                                    class="form-control @error('external_url') is-invalid @enderror"
                                    placeholder="https://exemplo.com/documento" value="{{ old('external_url') }}">
                                <div class="form-text text-muted">
                                    Insira a URL completa começando com http:// ou https://
                                </div>
                                @error('external_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Campo para Arquivo -->
                            <div class="mb-3" id="fileField">
                                <label class="form-label fw-bold">Arquivo *</label>
                                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror"
                                    accept=".pdf,.doc,.docx,.xlsx,.xls,.ppt,.pptx">
                                <div class="form-text text-muted">
                                    Formatos permitidos: PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX. Tamanho máximo: 10MB
                                </div>
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('comercial') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left me-2"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-lg me-2"></i>Salvar Documento
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const typeLink = document.getElementById('typeLink');
            const typeFile = document.getElementById('typeFile');
            const urlField = document.getElementById('urlField');
            const fileField = document.getElementById('fileField');
            const urlInput = document.querySelector('input[name="external_url"]');
            const fileInput = document.querySelector('input[name="file"]');

            function toggleFields() {
                if (typeLink.checked) {
                    // Modo Link - mostra URL, esconde arquivo
                    urlField.classList.remove('d-none');
                    fileField.classList.add('d-none');
                    if (urlInput) urlInput.required = true;
                    if (fileInput) fileInput.required = false;
                    // Limpa o campo de arquivo se houver
                    if (fileInput) fileInput.value = '';
                } else {
                    // Modo Arquivo - mostra arquivo, esconde URL
                    urlField.classList.add('d-none');
                    fileField.classList.remove('d-none');
                    if (urlInput) urlInput.required = false;
                    if (fileInput) fileInput.required = true;
                    // Limpa o campo de URL se houver
                    if (urlInput) urlInput.value = '';
                }
            }

            // Adiciona event listeners apenas se os elementos existirem
            if (typeLink && typeFile) {
                typeLink.addEventListener('change', toggleFields);
                typeFile.addEventListener('change', toggleFields);

                // Executar ao carregar para garantir o estado correto
                toggleFields();
            }
        });
    </script>
@endsection