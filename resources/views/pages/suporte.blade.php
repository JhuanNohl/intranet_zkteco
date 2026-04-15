@extends('layouts.app')

@section('title', 'Suporte - ZKNet')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-headset me-2"></i>Suporte Técnico
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Acesso Rápido (simplificados) -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center py-4">
                    <i class="bi bi-sliders2 fs-1 text-primary mb-3"></i>
                    <h5 class="card-title text-success">Parâmetros StandAlone</h5>
                    <p class="card-text text-muted">
                        Parâmetros StandAlone ZKTeco
                    </p>
                    <a href="{{ route('suporte.parametros') }}" class="btn btn-success btn-sm mt-2">
                        <i class="bi bi-eye me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center py-4">
                    <i class="bi bi-book-fill fs-1 text-success mb-3"></i>
                    <h5 class="card-title text-success">Base de Conhecimento</h5>
                    <p class="card-text text-muted">
                        Artigos, tutoriais e guias rápidos
                    </p>
                    <a href="http://base-conhecimento:82/" target="_blank" class="btn btn-success btn-sm mt-2">
                        <i class="bi bi-box-arrow-up-right me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center py-4">
                    <i class="bi bi-key-fill fs-1 text-warning mb-3"></i>
                    <h5 class="card-title text-success">Licenças de Software</h5>
                    <p class="card-text text-muted">
                        Licenciamento de Software ZKTeco
                    </p>
                    <a href="{{ route('suporte.licencas') }}" class="btn btn-success btn-sm mt-2">
                        <i class="bi bi-eye me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Ferramentas Úteis do Suporte -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-tools me-2"></i>Ferramentas do Suporte</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <!-- Blip Desk -->
                        <a href="https://zkteco.desk.blip.ai/" target="_blank"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-chat-dots-fill text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Blip Desk</h6>
                                    <small class="text-muted">Atendimento e suporte ao cliente</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Link Externo</span>
                                </div>
                            </div>
                        </a>

                        <!-- TeamViewer -->
                        <a href="https://www.teamviewer.com/pt-br/download/windows/" target="_blank"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-display text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">TeamViewer</h6>
                                    <small class="text-muted">Download para acesso remoto</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Link Externo</span>
                                </div>
                            </div>
                        </a>

                        <!-- Trello -->
                        <a href="https://trello.com/b/ndbqxpCe/suporte-tecnico" target="_blank"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-kanban text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Trello - Suporte Técnico</h6>
                                    <small class="text-muted">Organização de tarefas e demandas</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Link Externo</span>
                                </div>
                            </div>
                        </a>

                        <!-- Licenças ZKTeco (Portal 1) -->
                        <a href="https://lic.zkteco.com/loginController.do?login" target="_blank"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-key-fill text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Portal de Licenças ZKTeco</h6>
                                    <small class="text-muted">Gerenciamento de licenças de software</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Link Externo</span>
                                </div>
                            </div>
                        </a>

                        <!-- Licenças ZKTeco (Portal 2 - SG) -->
                        <a href="https://sglic.zkteco.com/admin/go/login" target="_blank"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-shield-lock-fill text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Portal de Licenças ZKTeco (SG)</h6>
                                    <small class="text-muted">Sistema de gestão de licenças</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Link Externo</span>
                                </div>
                            </div>
                        </a>
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
                border-left-color: #7AC143;
                transform: translateX(5px);
            }
        </style>
    @endpush
@endsection