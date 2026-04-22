@extends('layouts.app')

@section('title', 'Financeiro - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-graph-up me-2"></i>Financeiro
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                        <div class="text-end">
                            <i class="bi bi-currency-dollar display-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Estatísticas Rápidas -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-receipt fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">R$ 1.234.567</h3>
                    <p class="text-muted small mb-0">Contas a Receber</p>
                    <small class="text-success">+12% este mês</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-credit-card fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">R$ 987.654</h3>
                    <p class="text-muted small mb-0">Contas a Pagar</p>
                    <small class="text-success">-5% este mês</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-calculator fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">R$ 246.913</h3>
                    <p class="text-muted small mb-0">Fluxo de Caixa</p>
                    <small class="text-success">Projeção mensal</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-building fs-1 text-success"></i>
                    </div>
                    <h3 class="mb-0">98%</h3>
                    <p class="text-muted small mb-0">Inadimplência</p>
                    <small class="text-success">Meta: 95%</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards das Seções Principais -->
    <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-receipt fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Contas a Receber e Pagar</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-text-fill text-success me-2"></i>
                                Relatório de Contas a Receber
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-text-fill text-success me-2"></i>
                                Relatório de Contas a Pagar
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-calendar-check-fill text-success me-2"></i>
                                Calendário de Pagamentos
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-pie-chart-fill text-success me-2"></i>
                                Dashboard de Cobrança
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-file-earmark-text fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Fiscal</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-earmark-pdf-fill text-success me-2"></i>
                                Guias de Impostos
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-calculator-fill text-success me-2"></i>
                                Calculadora Tributária
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-graph-up text-success me-2"></i>
                                Obrigações Acessórias
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <i class="bi bi-link-45deg text-success me-2"></i>
                                Portal SPED
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-success" target="_blank">
                                Acessar <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-cart fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Compras</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-box-seam-fill text-success me-2"></i>
                                Pedidos de Compra
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-truck text-success me-2"></i>
                                Acompanhamento de Entregas
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-people-fill text-success me-2"></i>
                                Fornecedores
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-text-fill text-success me-2"></i>
                                Cotações
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-building fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Timbrado ZKTeco®</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-earmark-pdf-fill text-success me-2"></i>
                                Timbrado Oficial - PDF
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-earmark-word-fill text-success me-2"></i>
                                Timbrado Oficial - Word
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-image-fill text-success me-2"></i>
                                Logotipos e Identidade Visual
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled">
                            <div>
                                <i class="bi bi-file-text-fill text-success me-2"></i>
                                Manual de Identidade
                            </div>
                            <span class="badge bg-success">Em breve</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Links Úteis -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-link-45deg me-2 text-success"></i>Sistemas e Acessos Rápidos</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-bank fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">ERP Financeiro</h6>
                                    <small class="text-muted">Sankhya</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-graph-up fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">Power BI</h6>
                                    <small class="text-muted">Dashboards</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-file-spreadsheet fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">Planilhas</h6>
                                    <small class="text-muted">Modelos financeiros</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-cloud-upload fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">NF-e</h6>
                                    <small class="text-muted">Notas fiscais</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);
            }

            .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }

            .list-group-item {
                transition: all 0.2s;
                border-left: 3px solid transparent;
            }

            .list-group-item:hover {
                background-color: #f8f9fa;
                border-left-color: #2e8b57;
                transform: translateX(5px);
            }
        </style>
    @endpush
@endsection