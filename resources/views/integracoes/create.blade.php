@extends('layouts.app')

@section('title', 'Novo Equipamento')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-plus-circle me-2"></i>Novo Equipamento
                            </h1>
                            <p class="mb-0 opacity-75">Cadastre um novo equipamento no sistema</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-pencil-square me-2"></i>Formulário de Cadastro
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('integracoes.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="modelo" class="form-label fw-bold">
                                Modelo do Equipamento <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}"
                                class="form-control @error('modelo') is-invalid @enderror"
                                placeholder="Ex: C3-100, iClock 680, etc." required>
                            @error('modelo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Nome ou código do modelo do equipamento</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="bi bi-link me-1"></i>Compatibilidades com Sistemas
                            </label>
                            <p class="text-muted small mb-3">
                                Adicione observações sobre compatibilidade com cada sistema (opcional)
                            </p>

                            <div class="list-group">
                                @foreach($sistemas as $sistema)
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <label class="fw-bold mb-0">
                                                    <i class="bi bi-building me-2 text-primary"></i>
                                                    {{ $sistema->nome }}
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="compatibilidades[{{ $sistema->id }}]"
                                                    class="form-control form-control-sm"
                                                    placeholder="Ex: Compatível, Requer firmware X, etc."
                                                    value="{{ old('compatibilidades.' . $sistema->id) }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('integracoes.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-1"></i>Cancelar
                            </a>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-1"></i>Salvar Equipamento
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection