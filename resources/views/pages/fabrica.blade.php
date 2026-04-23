@extends('layouts.app')

@section('title', 'Fábrica - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-building-fill me-2"></i>Fábrica
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Métricas Rápidas -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-box-seam fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">1.234</h3>
                    <p class="text-muted small mb-0">Produtos em Estoque</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-truck fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">56</h3>
                    <p class="text-muted small mb-0">Pedidos em Produção</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-calendar-check fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">98%</h3>
                    <p class="text-muted small mb-0">OKL - Nível de Serviço</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-people fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">42</h3>
                    <p class="text-muted small mb-0">Colaboradores</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Abas de navegação -->
    <ul class="nav nav-tabs mb-4" id="fabricaTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="macro-tab" data-bs-toggle="tab" data-bs-target="#macro" type="button"
                role="tab">
                <i class="bi bi-diagram-3 me-2"></i>Macroprocesso Industrial
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="planejamento-tab" data-bs-toggle="tab" data-bs-target="#planejamento" type="button"
                role="tab">
                <i class="bi bi-table me-2"></i>Planejamento de Produção
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="documentos-tab" data-bs-toggle="tab" data-bs-target="#documentos" type="button"
                role="tab">
                <i class="bi bi-folder-fill me-2"></i>Documentos e Manuais
            </button>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Aba 1: Macroprocesso Industrial -->
        <div class="tab-pane fade show active" id="macro" role="tabpanel">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">
                                <i class="bi bi-gear-fill me-2 text-success"></i>
                                Macroprocesso Industrial - ZKTeco Brasil
                            </h5>
                        </div>
                        <div class="card-body">
                            <!-- Fluxograma do Processo -->
                            <div class="row g-3 mb-5">
                                <div class="col-md-3">
                                    <div class="text-center p-3 border rounded bg-light">
                                        <i class="bi bi-graph-up fs-1 text-success"></i>
                                        <h6 class="mt-2">Previsão de Demanda</h6>
                                        <small class="text-muted">Planejamento de estoques e compras</small>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center p-3 border rounded bg-light">
                                        <i class="bi bi-box-seam fs-1 text-success"></i>
                                        <h6 class="mt-2">Recebimento</h6>
                                        <small class="text-muted">Conferência e armazenagem</small>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-3 border rounded bg-light">
                                        <i class="bi bi-calculator fs-1 text-success"></i>
                                        <h6 class="mt-2">Processamento de Pedidos</h6>
                                        <small class="text-muted">PCP e sequenciamento</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-5">
                                <div class="col-md-3">
                                    <div class="text-center p-3 border rounded bg-light">
                                        <i class="bi bi-tools fs-1 text-success"></i>
                                        <h6 class="mt-2">Produção e Testes</h6>
                                        <small class="text-muted">Manufatura e qualidade</small>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center p-3 border rounded bg-light">
                                        <i class="bi bi-clipboard-check fs-1 text-success"></i>
                                        <h6 class="mt-2">Conferência</h6>
                                        <small class="text-muted">Embalagem e NF</small>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-3 border rounded bg-light">
                                        <i class="bi bi-truck fs-1 text-success"></i>
                                        <h6 class="mt-2">Transporte e Entrega</h6>
                                        <small class="text-muted">CIF / FOB</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Grupos de Produtos -->
                            <div class="mt-4">
                                <h6 class="fw-bold mb-3">
                                    <i class="bi bi-tags me-2 text-success"></i>
                                    Grupos de Produtos Industrializados
                                </h6>
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.01 - Controle de Acesso</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.02 - Ponto e Frequência</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.03 - Catraca/Cancela</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.04 - Smart Locks</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.05 - Linha GreenLabel</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.06 - Linha Híbrida</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.07 - Inspeção de Segurança</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="badge bg-dark p-2 w-100 mb-1">1.08 - Controladoras</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Botão para visualizar PDF -->
                            <div class="mt-4 text-center">
                                @can('gerenciar_fabrica')
                                    <a href="#" class="btn btn-outline-success btn-sm">
                                        <i class="bi bi-pencil"></i> Editar Processo
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aba 2: Planejamento de Produção (Google Sheets) -->
        <div class="tab-pane fade" id="planejamento" role="tabpanel">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="bi bi-table me-2 text-success"></i>
                        PLANEJAMENTO DE PRODUÇÃO | VALIDAÇÃO DE NOVOS PEDIDOS | FINANCEIRO | VALE
                    </h5>
                    @can('gerenciar_fabrica')
                        <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vS1aI-xKv3Gmd_9yG1obJsoks7mePIfn2GcOhRswE_sY_o-czfzVZYKrCmvfnyJtEeUlAikxwcG2KOn/edit"
                            target="_blank" class="btn btn-sm btn-success">
                            <i class="bi bi-pencil-square"></i> Editar Planilha
                        </a>
                    @endcan
                </div>
                <div class="card-body p-0">
                    <iframe
                        src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS1aI-xKv3Gmd_9yG1obJsoks7mePIfn2GcOhRswE_sY_o-czfzVZYKrCmvfnyJtEeUlAikxwcG2KOn/pubhtml?widget=true&amp;headers=false"
                        style="width: 100%; height: 600px; border: none;">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Aba 3: Documentos e Manuais -->
        <div class="tab-pane fade" id="documentos" role="tabpanel">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">
                                <i class="bi bi-file-earmark-pdf-fill text-success me-2"></i>
                                Macroprocesso Industrial
                            </h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-pdf display-1 text-success"></i>
                            <p class="mt-3">Documento completo do processo industrial ZKTeco Brasil</p>
                            <a href="#" class="btn btn-success">
                                <i class="bi bi-download me-1"></i> Baixar PDF
                            </a>
                            @can('gerenciar_fabrica')
                                <button class="btn btn-outline-success btn-sm ms-2"
                                    onclick="alert('Upload de arquivo - Em desenvolvimento')">
                                    <i class="bi bi-upload"></i> Atualizar
                                </button>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">
                                <i class="bi bi-file-text-fill text-success me-2"></i>
                                Procedimentos Operacionais
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    POP - Recebimento de Materiais
                                    <span class="badge bg-success float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    POP - Armazenagem
                                    <span class="badge bg-success float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    POP - Controle de Qualidade
                                    <span class="badge bg-success float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    POP - Expedição
                                    <span class="badge bg-success float-end">Em breve</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @can('gerenciar_fabrica')
        @push('scripts')
            <script>
                // Funções administrativas para o setor de Fábrica
                console.log('Modo administrador - Fábrica');
            </script>
        @endpush
    @endcan

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #1a1a2e 0%, #e67e22 100%);
            }

            .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }

            .nav-tabs .nav-link {
                border: none;
                font-weight: 500;
                color: #6c757d;
                transition: all 0.3s;
            }

            .nav-tabs .nav-link:hover {
                color: #e67e22;
                border-bottom: 3px solid #e67e22;
            }

            .nav-tabs .nav-link.active {
                color: #e67e22;
                background-color: transparent;
                border-bottom: 3px solid #e67e22;
            }

            .badge {
                font-size: 0.75rem;
                padding: 0.5rem;
            }
        </style>
    @endpush
@endsection