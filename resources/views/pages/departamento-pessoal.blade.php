@extends('layouts.app')

@section('title', 'Gestão de Pessoas - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-people-fill me-2"></i>Gestão de Pessoas
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                        <div>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                                <input type="text" id="buscaDocumento" class="form-control"
                                    placeholder="Pesquisar documentos...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Acesso Rápido -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-calendar-event fs-1 text-primary"></i>
                    </div>
                    <h5>Comunicados e Avisos</h5>
                    <p class="text-muted small">Fique por dentro das novidades</p>
                    <a href="{{ route('comunicados.index') }}" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-eye me-1"></i> Ver todos
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-shield-check fs-1 text-success"></i>
                    </div>
                    <h5>CIPA</h5>
                    <p class="text-muted small">Comissão Interna de Prevenção de Acidentes</p>
                    <a href="#" class="btn btn-outline-success btn-sm disabled">
                        <i class="bi bi-eye me-1"></i> Em breve
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-warning bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-bank fs-1 text-warning"></i>
                    </div>
                    <h5>Sindicato</h5>
                    <p class="text-muted small">Convenções e acordos coletivos</p>
                    <a href="#" class="btn btn-outline-warning btn-sm disabled">
                        <i class="bi bi-eye me-1"></i> Em breve
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Parcerias Educacionais -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-info bg-opacity-10 p-2 me-3">
                            <i class="bi bi-mortarboard-fill fs-4 text-info"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Parcerias Educacionais</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <!-- Graduação -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white">
                                    <h6 class="mb-0">
                                        <i class="bi bi-mortarboard-fill text-primary me-2"></i>
                                        Graduação
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-building fs-2 text-primary me-3"></i>
                                        <div>
                                            <h6 class="mb-1">ANHANGUERA</h6>
                                            <p class="text-muted small mb-0">
                                                <i class="bi bi-person"></i> Consultor: Renato Campos<br>
                                                <i class="bi bi-whatsapp"></i> (31) 98299-7393
                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary btn-copiar-contato"
                                        data-contato="Renato Campos - (31) 98299-7393">
                                        <i class="bi bi-copy"></i> Copiar Contato
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Idiomas -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white">
                                    <h6 class="mb-0">
                                        <i class="bi bi-chat-dots-fill text-success me-2"></i>
                                        Idiomas
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-building fs-5 text-success me-2"></i>
                                            <strong>OPEN ENGLISH</strong>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            <i class="bi bi-person"></i> Consultor: Everton<br>
                                            <i class="bi bi-whatsapp"></i> (84) 9119-7312
                                        </p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-building fs-5 text-info me-2"></i>
                                            <strong>CCEA</strong>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            <i class="bi bi-person"></i> Consultora: Kenia<br>
                                            <i class="bi bi-whatsapp"></i> (31) 9200-9269
                                        </p>
                                    </div>
                                    <button class="btn btn-sm btn-outline-success btn-copiar-contato"
                                        data-contato="Open English: Everton (84) 9119-7312 | CCEA: Kenia (31) 9200-9269">
                                        <i class="bi bi-copy"></i> Copiar Contatos
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Políticas e Orientações -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-danger bg-opacity-10 p-2 me-3">
                            <i class="bi bi-file-text-fill fs-4 text-danger"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Políticas e Orientações</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Coluna 1 -->
                        <div class="col-md-4">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-file-earmark-text me-2"></i> Código de Conduta
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-calendar-week me-2"></i> Day Off
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-suitcase-lg me-2"></i> Férias
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-lightning-charge me-2"></i> Flash
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                            </div>
                        </div>
                        <!-- Coluna 2 -->
                        <div class="col-md-4">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-house-door me-2"></i> Home Office
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-person-lines-fill me-2"></i> Lista de Contato
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-diagram-3 me-2"></i> Organograma
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-clock-history me-2"></i> Política de Registro de Ponto
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                            </div>
                        </div>
                        <!-- Coluna 3 -->
                        <div class="col-md-4">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-car-front me-2"></i> Política Uber/99POP
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-cup-straw me-2"></i> Uso Refeitório / Cafeteira
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-basket me-2"></i> Vale Alimentação
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-fuel-pump me-2"></i> Vale Combustível
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-egg-fried me-2"></i> Vale Refeição
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <i class="bi bi-airplane me-2"></i> Viagens / Serviço Externo
                                    <span class="badge bg-secondary float-end">Em breve</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão Admin (apenas para quem tem permissão) -->
    @can('gerenciar_dp')
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button class="btn btn-outline-secondary btn-sm" onclick="alert('Área administrativa - Em desenvolvimento')">
                    <i class="bi bi-gear"></i> Gerenciar Documentos
                </button>
            </div>
        </div>
    @endcan

    @push('scripts')
        <script>
            // Busca de documentos
            document.getElementById('buscaDocumento').addEventListener('input', function () {
                const termo = this.value.toLowerCase();
                const cards = document.querySelectorAll('.card.shadow-sm');

                cards.forEach(card => {
                    const texto = card.innerText.toLowerCase();
                    if (texto.includes(termo)) {
                        card.closest('.col-md-4, .col-md-6, .col-12').style.display = '';
                    } else if (card.closest('.col-md-4, .col-md-6, .col-12')) {
                        card.closest('.col-md-4, .col-md-6, .col-12').style.display = 'none';
                    }
                });
            });

            // Copiar contato
            document.querySelectorAll('.btn-copiar-contato').forEach(btn => {
                btn.addEventListener('click', function () {
                    const contato = this.dataset.contato;
                    navigator.clipboard.writeText(contato);

                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="bi bi-check"></i> Copiado!';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
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
                border-left-color: #3498db;
                transform: translateX(5px);
            }
        </style>
    @endpush
@endsection