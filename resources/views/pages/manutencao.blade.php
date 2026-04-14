@extends('layouts.app')

@section('title', 'Manutenção - Gestão de Equipamentos')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-tools me-2"></i>Manutenção
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                        <div class="gap-2 d-flex">
                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#modalNovoEquipamento">
                                <i class="bi bi-plus-circle me-2"></i>Novo RMA
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Estatísticas -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-0">Total em Manutenção</h6>
                            <h2 class="mb-0" id="totalEmManutencao">{{ $stats['total'] ?? 0 }}</h2>
                        </div>
                        <i class="bi bi-tools fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-0">Aguardando Aprovação</h6>
                            <h2 class="mb-0" id="totalAguardando">{{ $stats['aguardando'] ?? 0 }}</h2>
                        </div>
                        <i class="bi bi-clock-history fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-0">Concluídos (Mês)</h6>
                            <h2 class="mb-0" id="totalConcluidos">{{ $stats['concluidos'] ?? 0 }}</h2>
                        </div>
                        <i class="bi bi-check-circle fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="mb-0">Cancelados</h6>
                            <h2 class="mb-0" id="totalCancelados">{{ $stats['cancelados'] ?? 0 }}</h2>
                        </div>
                        <i class="bi bi-x-circle fs-1 opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline de Status (Referência visual) -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="mb-3"><i class="bi bi-diagram-3 me-2"></i>Fluxo de Manutenção</h6>
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        @php
                            $statusList = [
                                ['codigo' => 'abertura', 'nome' => '📋 Abertura RMA', 'cor' => 'secondary'],
                                ['codigo' => 'recebimento', 'nome' => '📦 Recebimento', 'cor' => 'info'],
                                ['codigo' => 'analise', 'nome' => '🔍 Análise', 'cor' => 'primary'],
                                ['codigo' => 'orcamento', 'nome' => '💰 Orçamento', 'cor' => 'warning'],
                                ['codigo' => 'pagamento', 'nome' => '💳 Pagamento', 'cor' => 'dark'],
                                ['codigo' => 'manutencao', 'nome' => '🔧 Manutenção', 'cor' => 'secondary'],
                                ['codigo' => 'concluido', 'nome' => '✅ Concluído', 'cor' => 'success'],
                            ];
                        @endphp
                        @foreach($statusList as $status)
                            <div class="text-center mx-2">
                                <span class="badge bg-{{ $status['cor'] }} p-2">{{ $status['nome'] }}</span>
                            </div>
                            @if(!$loop->last)
                                <i class="bi bi-arrow-right text-muted"></i>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de Equipamentos em Manutenção -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-hdd-stack me-2"></i>Equipamentos em Manutenção
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="tabelaEquipamentos">
                            <thead class="table-light">
                                <tr>
                                    <th>RMA</th>
                                    <th>Cliente</th>
                                    <th>Equipamento</th>
                                    <th>Modelo</th>
                                    <th>Status</th>
                                    <th>Data Entrada</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="listaEquipamentos">
                                @forelse($equipamentos as $item)
                                                    <tr data-id="{{ $item->id }}" data-status="{{ $item->status }}">
                                                        <td><span class="badge bg-secondary">{{ $item->rma }}</span></td>
                                                        <td>{{ $item->cliente }}</td>
                                                        <td>{{ $item->equipamento }}</td>
                                                        <td>{{ $item->modelo }}</td>
                                                        <td>
                                                            @php
                                                                $statusCores = [
                                                                    'abertura' => 'secondary',
                                                                    'recebimento' => 'info',
                                                                    'analise' => 'primary',
                                                                    'orcamento' => 'warning',
                                                                    'pagamento' => 'dark',
                                                                    'manutencao' => 'secondary',
                                                                    'concluido' => 'success',
                                                                    'cancelado' => 'danger',
                                                                ];
                                                                $statusNomes = [
                                                                    'abertura' => 'Abertura RMA',
                                                                    'recebimento' => 'Recebimento',
                                                                    'analise' => 'Em Análise',
                                                                    'orcamento' => 'Orçamento',
                                                                    'pagamento' => 'Aguardando Pagamento',
                                                                    'manutencao' => 'Em Manutenção',
                                                                    'concluido' => 'Concluído',
                                                                    'cancelado' => 'Cancelado',
                                                                ];
                                                            @endphp
                                     <span
                                                                class="badge status-badge bg-{{ $statusCores[$item->status] ?? 'secondary' }}">
                                                                {{ $statusNomes[$item->status] ?? $item->status }}
                                                            </span>
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($item->data_entrada)->format('d/m/Y') }}</td>
                                                        <td>
                                                            <div class="btn-group btn-group-sm">
                                                                <button class="btn btn-outline-primary btn-avancar" data-id="{{ $item->id }}"
                                                                    data-status="{{ $item->status }}">
                                                                    <i class="bi bi-arrow-right"></i> Avançar
                                                                </button>
                                                                <button class="btn btn-outline-danger btn-cancelar" data-id="{{ $item->id }}">
                                                                    <i class="bi bi-x-circle"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                @empty
                                    <tr id="nenhumRegistro">
                                        <td colspan="7" class="text-center py-4 text-muted">
                                            <i class="bi bi-inbox fs-1"></i>
                                            <p class="mb-0">Nenhum equipamento registrado</p>
                                            <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal"
                                                data-bs-target="#modalNovoEquipamento">
                                                <i class="bi bi-plus-circle"></i> Adicionar primeiro equipamento
                                            </button>
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

    <!-- Modal para Criar Novo Equipamento -->
    <div class="modal fade" id="modalNovoEquipamento" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>Novo RMA - Equipamento
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form id="formNovoEquipamento">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Número RMA *</label>
                                <input type="text" name="rma" class="form-control" required placeholder="Ex: RMA-2024-001">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Cliente *</label>
                                <input type="text" name="cliente" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Equipamento *</label>
                                <input type="text" name="equipamento" class="form-control" required
                                    placeholder="Ex: Leitor Biométrico">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Modelo *</label>
                                <input type="text" name="modelo" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Número de Série</label>
                                <input type="text" name="numero_serie" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Data de Entrada *</label>
                                <input type="date" name="data_entrada" class="form-control" value="{{ date('Y-m-d') }}"
                                    required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Observações</label>
                                <textarea name="observacoes" class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Salvar RMA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para Avançar Estágio -->
    <div class="modal fade" id="modalAvancarEstagio" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-arrow-right-circle me-2"></i>Avançar Estágio
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form id="formAvancarEstagio">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="equipamentoId">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Próximo Estágio</label>
                            <select name="status" id="novoStatus" class="form-control" required>
                                <option value="">Selecione...</option>
                                <option value="recebimento">📦 Recebimento</option>
                                <option value="analise">🔍 Análise Técnica</option>
                                <option value="orcamento">💰 Orçamento</option>
                                <option value="pagamento">💳 Aguardar Pagamento</option>
                                <option value="manutencao">🔧 Em Manutenção</option>
                                <option value="concluido">✅ Concluído</option>
                            </select>
                        </div>
                        <div class="mb-3 d-none" id="campoValor">
                            <label class="form-label">Valor do Orçamento (R$)</label>
                            <input type="number" name="valor_orcamento" class="form-control" step="0.01">
                        </div>
                        <div class="mb-3" id="campoLaudo">
                            <label class="form-label">Laudo Técnico / Observações</label>
                            <textarea name="laudo_tecnico" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Avançar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Mapeamento de status
            const statusMap = {
                'abertura': { nome: 'Abertura RMA', cor: 'secondary', ordem: 1 },
                'recebimento': { nome: 'Recebimento', cor: 'info', ordem: 2 },
                'analise': { nome: 'Em Análise', cor: 'primary', ordem: 3 },
                'orcamento': { nome: 'Orçamento Enviado', cor: 'warning', ordem: 4 },
                'pagamento': { nome: 'Aguardando Pagamento', cor: 'dark', ordem: 5 },
                'manutencao': { nome: 'Em Manutenção', cor: 'secondary', ordem: 6 },
                'concluido': { nome: 'Concluído', cor: 'success', ordem: 7 },
                'cancelado': { nome: 'Cancelado', cor: 'danger', ordem: 8 }
            };

            // Função para atualizar estatísticas
            function atualizarEstatisticas() {
                fetch('{{ route("manutencao.equipamentos.stats") }}')
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('totalEmManutencao').innerText = data.total;
                        document.getElementById('totalAguardando').innerText = data.aguardando;
                        document.getElementById('totalConcluidos').innerText = data.concluidos;
                        document.getElementById('totalCancelados').innerText = data.cancelados;
                    })
                    .catch(error => console.error('Erro ao atualizar estatísticas:', error));
            }

            // Função para recarregar a tabela
            function recarregarTabela() {
                fetch('{{ route("manutencao.equipamentos.table") }}')
                    .then(response => response.json())
                    .then(data => {
                        const tbody = document.getElementById('listaEquipamentos');
                        if (data.length === 0) {
                            tbody.innerHTML = `
                                        <tr id="nenhumRegistro">
                                            <td colspan="7" class="text-center py-4 text-muted">
                                                <i class="bi bi-inbox fs-1"></i>
                                                <p class="mb-0">Nenhum equipamento registrado</p>
                                                <button class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalNovoEquipamento">
                                                    <i class="bi bi-plus-circle"></i> Adicionar primeiro equipamento
                                                </button>
                                            </td>
                                         </tr>
                                    `;
                        } else {
                            tbody.innerHTML = data.map(item => `
                                        <tr data-id="${item.id}" data-status="${item.status}">
                                            <td><span class="badge bg-secondary">${escapeHtml(item.rma)}</span></td>
                                            <td>${escapeHtml(item.cliente)}</td>
                                            <td>${escapeHtml(item.equipamento)}</td>
                                            <td>${escapeHtml(item.modelo)}</td>
                                            <td><span class="badge status-badge bg-${statusMap[item.status]?.cor || 'secondary'}">${statusMap[item.status]?.nome || item.status}</span></td>
                                            <td>${item.data_entrada}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-outline-primary btn-avancar" data-id="${item.id}" data-status="${item.status}">
                                                        <i class="bi bi-arrow-right"></i> Avançar
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-cancelar" data-id="${item.id}">
                                                        <i class="bi bi-x-circle"></i>
                                                    </button>
                                                </div>
                                            </td>
                                         </tr>
                                    `).join('');
                        }
                        atribuirEventos();
                    })
                    .catch(error => console.error('Erro ao recarregar tabela:', error));
            }

            // Função para escapar HTML
            function escapeHtml(text) {
                if (!text) return '';
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            // Atribuir eventos aos botões
            function atribuirEventos() {
                document.querySelectorAll('.btn-avancar').forEach(btn => {
                    btn.removeEventListener('click', handleAvancar);
                    btn.addEventListener('click', handleAvancar);
                });

                document.querySelectorAll('.btn-cancelar').forEach(btn => {
                    btn.removeEventListener('click', handleCancelar);
                    btn.addEventListener('click', handleCancelar);
                });
            }

            function handleAvancar() {
                const id = this.dataset.id;
                const statusAtual = this.dataset.status;
                document.getElementById('equipamentoId').value = id;

                const select = document.getElementById('novoStatus');
                select.innerHTML = '<option value="">Selecione...</option>';

                const opcoes = [
                    { value: 'recebimento', label: '📦 Recebimento', show: statusAtual === 'abertura' },
                    { value: 'analise', label: '🔍 Análise Técnica', show: statusAtual === 'recebimento' },
                    { value: 'orcamento', label: '💰 Orçamento', show: statusAtual === 'analise' },
                    { value: 'pagamento', label: '💳 Aguardar Pagamento', show: statusAtual === 'orcamento' },
                    { value: 'manutencao', label: '🔧 Em Manutenção', show: statusAtual === 'pagamento' },
                    { value: 'concluido', label: '✅ Concluído', show: statusAtual === 'manutencao' }
                ];

                opcoes.forEach(op => {
                    if (op.show) {
                        const option = document.createElement('option');
                        option.value = op.value;
                        option.textContent = op.label;
                        select.appendChild(option);
                    }
                });

                document.getElementById('campoValor').classList.add('d-none');
                document.getElementById('novoStatus').onchange = function () {
                    if (this.value === 'orcamento') {
                        document.getElementById('campoValor').classList.remove('d-none');
                    } else {
                        document.getElementById('campoValor').classList.add('d-none');
                    }
                };

                new bootstrap.Modal(document.getElementById('modalAvancarEstagio')).show();
            }

            function handleCancelar() {
                const id = this.dataset.id;
                if (confirm('Cancelar este RMA? Esta ação não poderá ser desfeita.')) {
                    fetch(`/manutencao/equipamentos/${id}/cancelar`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                recarregarTabela();
                                atualizarEstatisticas();
                            }
                        })
                        .catch(error => console.error('Erro ao cancelar:', error));
                }
            }

            // Form de novo equipamento
            document.getElementById('formNovoEquipamento').addEventListener('submit', function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                fetch('{{ route("manutencao.equipamentos.store") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            bootstrap.Modal.getInstance(document.getElementById('modalNovoEquipamento')).hide();
                            this.reset();
                            recarregarTabela();
                            atualizarEstatisticas();

                            const alert = document.createElement('div');
                            alert.className = 'alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3';
                            alert.style.zIndex = '9999';
                            alert.innerHTML = `
                                    <i class="bi bi-check-circle me-2"></i>
                                    RMA ${data.rma} criado com sucesso!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                `;
                            document.body.appendChild(alert);
                            setTimeout(() => alert.remove(), 3000);
                        }
                    })
                    .catch(error => console.error('Erro ao salvar:', error));
            });

            // Form de avançar estágio
            document.getElementById('formAvancarEstagio').addEventListener('submit', function (e) {
                e.preventDefault();
                const id = document.getElementById('equipamentoId').value;
                const formData = new FormData(this);

                fetch(`/manutencao/equipamentos/${id}/avancar`, {
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            bootstrap.Modal.getInstance(document.getElementById('modalAvancarEstagio')).hide();
                            recarregarTabela();
                            atualizarEstatisticas();
                        }
                    })
                    .catch(error => console.error('Erro ao avançar estágio:', error));
            });

            // Inicializar eventos na carga da página
            document.addEventListener('DOMContentLoaded', function () {
                atribuirEventos();
            });
        </script>
    @endpush

    @push('styles')
        <style>
            .table tbody tr {
                transition: all 0.2s ease;
            }

            .table tbody tr:hover {
                background-color: rgba(122, 193, 67, 0.1);
                cursor: pointer;
            }

            .btn-group .btn {
                transition: all 0.2s;
            }

            .btn-group .btn:hover {
                transform: translateY(-2px);
            }

            .status-badge {
                font-size: 0.75rem;
                padding: 0.25rem 0.5rem;
            }
        </style>
    @endpush
@endsection