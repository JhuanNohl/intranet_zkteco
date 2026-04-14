@extends('layouts.app')

@section('title', 'Desenvolvimento')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-briefcase-fill me-2"></i>Desenvolvimento
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | Desenvolvimento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Acesso Rápido -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="card-title text-success">
                                <i class="bi bi-grid-3x3-gap-fill me-2"></i>Matriz de Integrações
                            </h5>
                            <p class="card-text text-muted">
                                Compatibilidade entre sistemas e equipamentos.
                            </p>
                            <a href="{{ route('integracoes.matriz') }}" class="btn btn-success btn-sm mt-2">
                                <i class="bi bi-eye me-1"></i>Acessar Matriz
                            </a>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded p-3">
                            <i class="bi bi-grid-3x3-gap-fill fs-1 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="card-title text-success">
                                <i class="bi bi-hdd-stack-fill me-2"></i>Equipamentos
                            </h5>
                            <p class="card-text text-muted">
                                Equipamentos e suas compatibilidades com sistemas.
                            </p>
                            <a href="{{ route('integracoes.index') }}" class="btn btn-success btn-sm mt-2">
                                <i class="bi bi-gear me-1"></i>Gerenciar
                            </a>
                        </div>
                        <div class="bg-success bg-opacity-10 rounded p-3">
                            <i class="bi bi-hdd-stack-fill fs-1 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estatísticas -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="display-4 fw-bold text-success">{{ \App\Models\Sistema::count() }}</div>
                    <div class="text-muted">Sistemas Integrados</div>
                    <i class="bi bi-building text-primary opacity-50 mt-2"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="display-4 fw-bold text-success">{{ \App\Models\Equipamento::count() }}</div>
                    <div class="text-muted">Equipamentos Cadastrados</div>
                    <i class="bi bi-hdd-stack text-success opacity-50 mt-2"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="display-4 fw-bold text-success">{{ \App\Models\Compatibilidade::count() }}</div>
                    <div class="text-muted">Compatibilidades Registradas</div>
                    <i class="bi bi-link text-info opacity-50 mt-2"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Últimos Equipamentos -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-clock-history me-2"></i>Últimos Equipamentos Adicionados
                    </h5>
                </div>
                <div class="card-body">
                    @php
                        $ultimosEquipamentos = \App\Models\Equipamento::orderBy('created_at', 'desc')->limit(10)->get();
                    @endphp

                    @if($ultimosEquipamentos->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Modelo</th>
                                        <th>Sistemas Compatíveis</th>
                                        <th>Data de Cadastro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ultimosEquipamentos as $equip)
                                        <tr>
                                            <td class="fw-bold">{{ $equip->modelo }}</td>
                                            <td>
                                                @php
                                                    $sistemasCount = $equip->sistemas->count();
                                                    $sistemasLista = $equip->sistemas->pluck('nome')->take(3)->implode(', ');
                                                @endphp
                                                @if($sistemasCount > 0)
                                                    <span class="badge bg-success">{{ $sistemasCount }}</span>
                                                    {{ $sistemasLista }}
                                                    @if($sistemasCount > 3)
                                                        <span class="text-muted">e mais {{ $sistemasCount - 3 }}</span>
                                                    @endif
                                                @else
                                                    <span class="text-muted">Nenhum</span>
                                                @endif
                                            </td>
                                            <td>{{ $equip->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end mt-3">
                            <a href="{{ route('integracoes.index') }}" class="btn btn-link">
                                Ver todos os equipamentos <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @else
                        <div class="text-center py-4">
                            <i class="bi bi-inbox display-1 text-muted"></i>
                            <p class="text-muted mt-2">Nenhum equipamento cadastrado ainda.</p>
                            <a href="{{ route('integracoes.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle"></i> Adicionar primeiro equipamento
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection