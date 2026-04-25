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
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-chat-left-dots fs-1 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Microsoft Teams</h5>
                    <p class="text-muted small">Comunicação Interna da Equipe</p>
                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalTeams">
                        <i class="bi bi-success-circle me-1"></i> Dicas e Recursos
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-telephone fs-1 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Telefonia SIP</h5>
                    <p class="text-muted small">Chamadas Corporativas</p>
                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalTelefonia">
                        <i class="bi bi-info-circle me-1"></i> Saiba mais
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-laptop fs-1 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Acesso Remoto</h5>
                    <p class="text-muted small">Suporte Remoto</p>
                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalTeamviewer">
                        <i class="bi bi-info-circle me-1"></i> Informações
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-browser-chrome fs-1 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Sankhya®</h5>
                    <p class="text-muted small">Link para o ERP</p>
                    <a href="http://zkteco.snk.ativy.com:40049/mge" target="_blank" class="btn btn-outline-success btn-sm">
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
                    <h5 class="mb-0"><i class="bi bi-folder-fill me-2 text-success"></i>Documentação e Tutoriais</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Coluna 1 -->
                        <div class="col-md-6">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-question-circle-fill text-success me-3 fs-5"></i>
                                    <div>
                                        <h6 class="mb-1">Dicas Úteis - Solução de Problemas</h6>
                                        <small class="text-muted">Guia rápido para resolução de problemas comuns</small>
                                    </div>
                                    <span class="badge bg-success ms-auto">Em breve</span>
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-intranet me-3 fs-5 text-success"></i>
                                    <div>
                                        <h6 class="mb-1">Introdução a Intranet</h6>
                                        <small class="text-muted">Como utilizar a nova plataforma</small>
                                    </div>
                                    <span class="badge bg-success ms-auto">Em breve</span>
                                </a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-file-earmark-arrow-up me-3 fs-5 text-success"></i>
                                    <div>
                                        <h6 class="mb-1">Como Adicionar um arquivo na Intranet</h6>
                                        <small class="text-muted">Tutorial passo a passo</small>
                                    </div>
                                    <span class="badge bg-success ms-auto">Em breve</span>
                                </a>
                            </div>
                        </div>
                        <!-- Coluna 2 -->
                        <div class="col-md-6">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center disabled">
                                    <i class="bi bi-download me-3 fs-5 text-success"></i>
                                    <div>
                                        <h6 class="mb-1">Link para Baixar o Navegador Sankhya®</h6>
                                        <small class="text-muted">Download do navegador compatível</small>
                                    </div>
                                    <span class="badge bg-success ms-auto">Em breve</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-link-45deg me-3 fs-5 text-success"></i>
                                    <div>
                                        <h6 class="mb-1">Sankhya® ERP - Produção</h6>
                                        <small class="text-muted">Acesso direto ao sistema</small>
                                    </div>
                                    <a href="http://zkteco.snk.ativy.com:40049/mge" target="_blank"
                                        class="btn btn-sm btn-outline-success ms-auto">
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
            <div class="card shadow-sm border-success">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-link-45deg me-2"></i>Links Úteis - T.I.</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-shield-lock fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">VPN Corporativa</h6>
                                    <small class="text-muted">Acesso remoto seguro</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-envelope fs-3 text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">Webmail</h6>
                                    <small class="text-muted">E-mail corporativo</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded">
                                <i class="bi bi-database fs-3 text-success me-3"></i>
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

    <!-- Modal do Microsoft Teams -->
    <div class="modal fade" id="modalTeams" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="bi bi-chat-left-dots me-2"></i>Dicas sobre o Microsoft Teams</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-chat-dots-fill text-success me-2"></i>
                            Utilize canais e equipes para organizar assuntos;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-bell-fill text-success me-2"></i>
                            Utilize @menções para mencionar outros usuários;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-telephone-fill text-success me-2"></i>
                            Realize reuniões e chamadas ilimitadas;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-file-earmark text-success me-2"></i>
                            Compartilhe e edite arquivos direto no Teams;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-sliders text-success me-2"></i>
                            Ajuste suas notificações conforme necessário;
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Telefonia SIP -->
    <div class="modal fade" id="modalTelefonia" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="bi bi-telephone-fill me-2"></i>Telefonia Corporativa - Servidor SIP</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3"><strong>O que é um Servidor SIP?</strong></p>
                    <p class="text-muted mb-3">
                        Um servidor SIP (Session Initiation Protocol) é o componente central em sistemas VoIP e de comunicação unificada que gerencia, 
                        estabelece e encerra sessões de voz, vídeo e mensagens. Ele atua como um "proxy" ou "registrador", 
                        rastreando dispositivos (ramais) e roteando chamadas entre eles. Essencial para PABX IP, ele converte dados digitais em chamadas.
                    </p>

                    <p class="mb-2"><strong><i class="bi bi-star-fill text-success me-2"></i>Principais Características e Funções:</strong></p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">
                            <i class="bi bi-telephone-inbound text-success me-2"></i>
                            <strong>Gerenciamento de Chamadas:</strong> Processa mensagens SIP para iniciar e finalizar chamadas;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-person-check text-success me-2"></i>
                            <strong>Registro de Usuários:</strong> Armazena a localização e endereço IP de cada dispositivo;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-arrow-left-right text-success me-2"></i>
                            <strong>Proxy e Redirecionamento:</strong> Funciona como intermediário que roteia conexões;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-shield-lock text-success me-2"></i>
                            <strong>Segurança e Sinalização:</strong> Utiliza UDP, TCP e TLS para maior segurança.
                        </li>
                    </ul>

                    <p class="mb-2"><strong><i class="bi bi-lightbulb text-success me-2"></i>Exemplos de Uso:</strong></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-building text-success me-2"></i>
                            <strong>PABX IP/Cloud:</strong> Centrais telefônicas virtuais ou físicas que utilizam SIP;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-telephone-plus text-success me-2"></i>
                            <strong>Comunicação de Portaria:</strong> Integrado a terminais de vídeo portaria e controladores de acesso;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-diagram-3 text-success me-2"></i>
                            <strong>SIP Trunking:</strong> Conexão de serviços de voz de operadoras à infraestrutura PABX.
                        </li>
                    </ul>

                    <p class="text-muted mt-3 mb-0">
                        <i class="bi bi-info-circle-fill text-success me-2"></i>
                        Os servidores SIP são cruciais para a telefonia moderna, permitindo a comunicação de áudio e vídeo de forma eficiente e flexível, utilizando a estrutura de dados IP.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Teamviewer -->
    <div class="modal fade" id="modalTeamviewer" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="bi bi-laptop me-2"></i>Acesso Remoto - Teamviewer</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Teamviewer é a solução utilizada para suporte remoto e acesso seguro aos computadores da empresa.</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Acesso remoto seguro a qualquer hora;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Suporte técnico direto do setor de T.I.;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            Conexão segura com criptografia end-to-end;
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            Para suporte, entre em contato com o setor de T.I..
                        </li>
                    </ul>
                    <div class="alert alert-info">
                        <i class="bi bi-cloud-download me-2"></i>
                        <strong>Download:</strong> Você pode baixar a versão mais recente do Teamviewer no link abaixo.
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="https://www.teamviewer.com/pt-br/download/windows/" target="_blank" class="btn btn-success">
                        <i class="bi bi-cloud-download me-1"></i> Baixar Teamviewer
                    </a>
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