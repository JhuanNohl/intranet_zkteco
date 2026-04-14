@extends('layouts.app')

@section('title', 'Editar Equipamento')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-pencil-fill me-2"></i>Editar Equipamento
                            </h1>
                            <p class="mb-0 opacity-75">
                                <i class="bi bi-hdd me-1"></i>{{ $equipamento->modelo }}
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('desenvolvimento') }}" class="btn btn-light">
                                <i class="bi bi-arrow-left me-2"></i>Voltar ao Desenvolvimento
                            </a>
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
                        <i class="bi bi-pencil-square me-2"></i>Formulário de Edição
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('integracoes.update', $equipamento) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="modelo" class="form-label fw-bold">
                                Modelo do Equipamento <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $equipamento->modelo) }}"
                                class="form-control @error('modelo') is-invalid @enderror" required>
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
                                Edite as observações sobre compatibilidade com cada sistema
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
                                                    value="{{ old('compatibilidades.' . $sistema->id, $compatibilidades[$sistema->id] ?? '') }}">
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
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i>Atualizar Equipamento
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Card de informações adicionais -->
            <div class="card shadow-sm mt-3">
                <div class="card-body">
                    <div class="d-flex align-items-center text-muted">
                        <i class="bi bi-clock-history me-2"></i>
                        <small>
                            Criado em: {{ $equipamento->created_at->format('d/m/Y H:i') }}
                            @if($equipamento->updated_at != $equipamento->created_at)
                                | Última atualização: {{ $equipamento->updated_at->format('d/m/Y H:i') }}
                            @endif
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection