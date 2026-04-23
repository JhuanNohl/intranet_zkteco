@extends('layouts.app')

@section('title', 'Novo Comunicado')

@section('content')
    <div class="container-fluid px-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 bg-gradient-primary text-white"
                    style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="display-6 fw-bold mb-2">
                                    <i class="bi bi-megaphone-fill me-2"></i>Novo Comunicado
                                </h1>
                                <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="bi bi-exclamation-triangle me-2"></i>Erro na validação:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('comunicados.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="titulo" class="form-label fw-bold">Título *</label>
                                <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror"
                                    value="{{ old('titulo') }}" required>
                                @error('titulo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="conteudo" class="form-label fw-bold">Conteúdo *</label>
                                <textarea name="conteudo" id="conteudo" class="form-control @error('conteudo') is-invalid @enderror"
                                    rows="6" required>{{ old('conteudo') }}</textarea>
                                @error('conteudo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Descreva o conteúdo do comunicado</small>
                            </div>

                            <div class="mb-3">
                                <label for="autor" class="form-label fw-bold">Autor (Opcional)</label>
                                <input type="text" name="autor" id="autor" class="form-control @error('autor') is-invalid @enderror"
                                    value="{{ old('autor', auth()->user()->name) }}" placeholder="Deixe em branco para usar seu nome">
                                @error('autor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="data_validade" class="form-label fw-bold">Data de Validade (Opcional)</label>
                                    <input type="date" name="data_validade" id="data_validade" class="form-control @error('data_validade') is-invalid @enderror"
                                        value="{{ old('data_validade') }}">
                                    @error('data_validade')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ordem" class="form-label fw-bold">Ordem de Exibição (Opcional)</label>
                                    <input type="number" name="ordem" id="ordem" class="form-control @error('ordem') is-invalid @enderror"
                                        value="{{ old('ordem') }}" placeholder="1, 2, 3...">
                                    @error('ordem')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="ativo" id="ativo" class="form-check-input checkbox-success" value="1" {{ old('ativo') ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="ativo">
                                    Ativar comunicado
                                </label>
                            </div>

                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('comunicados.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle me-1"></i>Salvar Comunicado
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .checkbox-success:checked {
                background-color: #7AC143;
                border-color: #7AC143;
            }
            .checkbox-success:focus {
                border-color: #7AC143;
                box-shadow: 0 0 0 0.2rem rgba(122, 193, 67, 0.25);
            }
        </style>
    @endpush
@endsection
