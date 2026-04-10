@extends('layouts.app')

@section('title', 'T.I. - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-pc-display me-2"></i>Tecnologia da Informação
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                        <div class="text-end">
                            <i class="bi bi-server display-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Principal - Voucher WiFi -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body text-center py-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="text-start">
                            <h5 class="text-white-50 mb-1"><i class="bi bi-wifi me-2"></i>Wi-Fi Convidados</h5>
                            <h2 class="text-white mb-0">VOUCHER WIFI DO MÊS VIGENTE</h2>
                            <div class="display-4 fw-bold text-warning mt-2" style="letter-spacing: 4px;">
                                <i class="bi bi-key me-2"></i>36973-83166
                            </div>
                            <p class="text-white-50 mt-2 mb-0">
                                <i class="bi bi-info-circle me-1"></i>
                                Solicite que o visitante se conecte na rede "Guests" e informe o código acima
                            </p>
                        </div>
                        <div class="text-end">
                            <i class="bi bi-qr-code display-1 text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Acesso Rápido -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-discord fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Discord</h5>
                    <p class="text-muted small">Comunicação e suporte da equipe</p>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDiscord">
                        <i class="bi bi-info-circle me-1"></i> Dicas e Recursos
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-phone fs-1 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Nova Telefonia</h5>
                    <p class="text-muted small">Recursos e configurações</p>
                    <a href="#" class="btn btn-outline-success btn-sm disabled">
                        <i class="bi bi-arrow-right me-1"></i> Em breve
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-info bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-laptop fs-1 text-info"></i>
                    </div>
                    <h5 class="fw-bold">Acesso Remoto</h5>
                    <p class="text-muted small">Conecte-se de qualquer lugar</p>
                    <a href="#" class="btn btn-outline-info btn-sm disabled">
                        <i class="bi bi-arrow-right me-1"></i> Em breve
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-warning bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-browser-chrome fs-1 text-warning"></i>
                    </div>
                    <h5 class="fw-bold">Sankhya®</h5>
                    <p class="text-muted small">Navegador para o ERP</p>
                    <a href="http://zkteco.snk.ativy.com:40049/mge" target="_blank" class="btn btn-outline-warning btn-sm">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Acessar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tópicos e Documentação -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-folder-fill me-2 text-primary"></i>Documentação e Tutoriais</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Coluna 1 -->
                        <div class="col-md-6">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-question-circle-fill text-info me-3 fs-5"></i>
                                    <div>
                                        <h6 class="mb-1">Dicas Úteis - Solução de Problemas</h6>
                                        <small class="text-muted">Guia rápido para resolução de problemas comuns</small>
                                    </div>
                                    <span class="badge bg-secondary ms-auto">Em breve</span>
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-intranet me-3 fs-5 text-primary"></i>
                                    <div>
                                        <h6 class="mb-1">Introdução a Intranet</h6>
                                        <small class="text-muted">Como utilizar a nova plataforma</small>
                                    </div>
                                    <span class="badge bg-secondary ms-auto">Em breve</span>
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-file-earmark-arrow-up me-3 fs-5 text-success"></i>
                                    <div>
                                        <h6 class="mb-1">Como Adicionar um arquivo na Intranet</h6>
                                        <small class="text-muted">Tutorial passo a passo</small>
                                    </div>
                                    <span class="badge bg-secondary ms-auto">Em breve</span>
                                </a>
                            </div>
                        </div>
                        <!-- Coluna 2 -->
                        <div class="col-md-6">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-download me-3 fs-5 text-danger"></i>
                                    <div>
                                        <h6 class="mb-1">Link para Baixar o Navegador Sankhya®</h6>
                                        <small class="text-muted">Download do navegador compatível</small>
                                    </div>
                                    <span class="badge bg-secondary ms-auto">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-link-45deg me-3 fs-5 text-primary"></i>
                                    <div>
                                        <h6 class="mb-1">Sankhya® ERP - Produção</h6>
                                        <small class="text-muted">Acesso direto ao sistema</small>
                                    </div>
                                    <a href="http://zkteco.snk.ativy.com:40049/mge" target="_blank"
                                        class="btn btn-sm btn-outline-primary ms-auto">
                                        Acessar <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Links Úteis -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="bi bi-link-45deg me-2"></i>Links Úteis - T.I.</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-shield-lock fs-3 text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0">VPN Corporativa</h6>
                                    <small class="text-muted">Acesso remoto seguro</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-envelope fs-3 text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0">Webmail</h6>
                                    <small class="text-muted">E-mail corporativo</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-database fs-3 text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0">Central de Serviços</h6>
                                    <small class="text-muted">Abertura de chamados</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal do Discord -->
    <div class="modal fade" id="modalDiscord" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="bi bi-discord me-2"></i>Dicas sobre o Discord</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-chat-dots-fill text-primary me-2"></i>
                            Utilize canais específicos para cada assunto
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-bell-fill text-warning me-2"></i>
                            Ative notificações apenas para menções
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-pin-fill text-danger me-2"></i>
                            Fixe mensagens importantes
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-search text-info me-2"></i>
                            Use a busca para encontrar mensagens antigas
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-robot text-success me-2"></i>
                            Integre bots para automação
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
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
            }

            .list-group-item:hover {
                background-color: #f8f9fa;
                transform: translateX(5px);
            }
        </style>
    @endpush
@endsection