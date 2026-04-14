@extends('layouts.app')

@section('title', 'Equipamentos')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-hdd-stack-fill me-2"></i>Equipamentos
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('integracoes.create') }}" class="btn btn-light">
                                <i class="bi bi-plus-circle me-1"></i>Novo Equipamento
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="bi bi-list-ul me-2"></i>Lista de Equipamentos
                    </h5>
                    <div>
                        <a href="{{ route('integracoes.matriz') }}" class="btn btn-outline-success btn-sm me-2">
                            <i class="bi bi-grid-3x3"></i> Ver Matriz
                        </a>
                        <a href="{{ route('integracoes.export') }}" class="btn btn-outline-success btn-sm">
                            <i class="bi bi-download"></i> Exportar CSV
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if($equipamentos->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Modelo</th>
                                        <th>Sistemas Compatíveis</th>
                                        <th>Data de Cadastro</th>
                                        <th class="text-end">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($equipamentos as $equipamento)
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{ $equipamento->modelo }}</span>
                                            </td>
                                            <td>
                                                @php
                                                    $sistemas = $equipamento->sistemas;
                                                    $count = $sistemas->count();
                                                @endphp
                                                @if($count > 0)
                                                    <span class="badge bg-success me-2">{{ $count }}</span>
                                                    @foreach($sistemas->take(3) as $sistema)
                                                        <span class="badge bg-light text-dark me-1">{{ $sistema->nome }}</span>
                                                    @endforeach
                                                    @if($count > 3)
                                                        <span class="text-muted">+{{ $count - 3 }}</span>
                                                    @endif
                                                @else
                                                    <span class="text-muted">Nenhum sistema compatível</span>
                                                @endif
                                            </td>
                                            <td>
                                                <i class="bi bi-calendar3 me-1 text-muted"></i>
                                                {{ $equipamento->created_at->format('d/m/Y H:i') }}
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ route('integracoes.edit', $equipamento) }}"
                                                    class="btn btn-sm btn-outline-success me-1" data-bs-toggle="tooltip"
                                                    title="Editar">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form action="{{ route('integracoes.destroy', $equipamento) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        data-bs-toggle="tooltip" title="Excluir"
                                                        onclick="return confirm('Tem certeza que deseja excluir este equipamento?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- PAGINAÇÃO CORRIGIDA --}}
                        <div class="d-flex justify-content-center mt-4">
                            {{ $equipamentos->links() }}
                        </div>

                        {{-- Informação de resultados --}}
                        <div class="text-muted small mt-2">
                            Mostrando {{ $equipamentos->firstItem() }} a {{ $equipamentos->lastItem() }} de
                            {{ $equipamentos->total() }} resultados
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="bi bi-inbox display-1 text-muted"></i>
                            <h5 class="text-muted mt-3">Nenhum equipamento cadastrado</h5>
                            <p class="text-muted">Comece adicionando seu primeiro equipamento.</p>
                            <a href="{{ route('integracoes.create') }}" class="btn btn-success mt-2">
                                <i class="bi bi-plus-circle me-1"></i>Novo Equipamento
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ativar tooltips do Bootstrap
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
@endpush