@extends('layouts.app')

@section('title', 'Matriz de Integrações')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-grid-3x3-gap-fill me-2"></i>Matriz de Integrações
                            </h1>
                            <p class="mb-0 opacity-75">Visualização e gestão das integrações entre sistemas. | INTRANET</p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="{{ route('desenvolvimento') }}" class="btn btn-outline-light">
                                <i class="bi bi-arrow-left me-2"></i>Voltar
                            </a>
                            <a href="{{ route('integracoes.index') }}" class="btn btn-outline-light me-2">
                                <i class="bi bi-hdd-stack me-1"></i>Equipamentos
                            </a>
                            <a href="{{ route('integracoes.export') }}" class="btn btn-outline-success">
                                <i class="bi bi-download me-1"></i>Exportar CSV
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
                <div class="card-header bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="bi bi-table me-2"></i>Matriz de Compatibilidade
                        </h5>
                        <span class="badge bg-success">
                            <i class="bi bi-info-circle me-1"></i>
                            Clique nas células para editar
                        </span>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="max-height: 600px;">
                        <table class="table table-bordered table-hover mb-0">
                            <thead class="table-light sticky-top">
                                <tr>
                                    <th class="bg-light" style="min-width: 200px;">
                                        <strong>Equipamento</strong><br>
                                        <small class="text-muted">Sistema →</small>
                                    </th>
                                    @foreach($sistemas as $sistema)
                                        <th class="text-center align-middle bg-light" style="min-width: 150px;">
                                            <span class="fw-bold">{{ $sistema->nome }}</span>
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($equipamentos as $equipamento)
                                    <tr>
                                        <td class="bg-light fw-bold align-middle">
                                            <i class="bi bi-hdd me-2 text-success"></i>
                                            {{ $equipamento->modelo }}
                                        </td>
                                        @foreach($sistemas as $sistema)
                                            @php
                                                $observacao = $matriz[$sistema->id][$equipamento->id] ?? '';
                                                $compExists = isset($matriz[$sistema->id][$equipamento->id]);
                                            @endphp
                                            <td
                                                class="text-center align-middle p-1 {{ $compExists ? 'bg-success bg-opacity-10' : '' }}">
                                                <input type="text"
                                                    class="form-control form-control-sm text-center border-0 bg-transparent celula-matriz"
                                                    style="min-width: 120px;" data-sistema="{{ $sistema->id }}"
                                                    data-equipamento="{{ $equipamento->id }}" value="{{ $observacao }}"
                                                    placeholder="{{ $compExists ? '' : '-' }}">
                                            </td>
                                        @endforeach
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ $sistemas->count() + 1 }}" class="text-center py-5">
                                            <i class="bi bi-inbox display-1 text-muted"></i>
                                            <h5 class="text-muted mt-3">Nenhum equipamento cadastrado</h5>
                                            <a href="{{ route('integracoes.create') }}" class="btn btn-success mt-2">
                                                <i class="bi bi-plus-circle me-1"></i>Cadastrar Primeiro Equipamento
                                            </a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Legenda -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body py-2">
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success bg-opacity-25 p-2 me-2">
                                <i class="bi bi-check-circle text-success"></i>
                            </span>
                            <small class="text-muted">Célula com compatibilidade registrada</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-pencil-square text-success me-2"></i>
                            <small class="text-muted">Digite para editar - salvamento automático</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const celulas = document.querySelectorAll('.celula-matriz');
            let timeoutId;

            celulas.forEach(celula => {
                // Salvar ao pressionar Enter ou perder o foco
                celula.addEventListener('keypress', function (e) {
                    if (e.key === 'Enter') {
                        this.blur();
                    }
                });

                celula.addEventListener('change', async function () {
                    const sistemaId = this.dataset.sistema;
                    const equipamentoId = this.dataset.equipamento;
                    const observacao = this.value;
                    const celula = this;

                    // Feedback visual de carregando
                    celula.classList.add('bg-warning', 'bg-opacity-25');

                    try {
                        const response = await fetch(`/integracoes/celula/${sistemaId}/${equipamentoId}`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({ observacao: observacao })
                        });

                        const data = await response.json();

                        if (data.success) {
                            // Feedback de sucesso
                            celula.classList.remove('bg-warning', 'bg-opacity-25');
                            celula.classList.add('bg-success', 'bg-opacity-25');
                            celula.closest('td').classList.add('bg-success', 'bg-opacity-10');

                            setTimeout(() => {
                                celula.classList.remove('bg-success', 'bg-opacity-25');
                            }, 1000);

                            // Atualizar placeholder se necessário
                            if (observacao) {
                                celula.placeholder = '';
                            } else {
                                celula.placeholder = '-';
                            }
                        }
                    } catch (error) {
                        console.error('Erro ao salvar:', error);
                        celula.classList.remove('bg-warning', 'bg-opacity-25');
                        celula.classList.add('bg-danger', 'bg-opacity-25');

                        setTimeout(() => {
                            celula.classList.remove('bg-danger', 'bg-opacity-25');
                        }, 1000);

                        alert('Erro ao salvar alteração. Tente novamente.');
                    }
                });
            });
        });
    </script>
@endpush