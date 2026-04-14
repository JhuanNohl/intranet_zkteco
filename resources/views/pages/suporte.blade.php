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
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-sliders2 fs-1 text-success"></i>
                    </div>
                    <h5>Parâmetros de Configuração</h5>
                    <p class="text-muted small">Parâmetros ZKTeco</p>
                    <a href="{{ route('suporte.parametros') }}" class="btn btn-success">
                        <i class="bi bi-eye me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-book-fill fs-1 text-success"></i>
                    </div>
                    <h5>Base de Conhecimento</h5>
                    <p class="text-muted small">Base de Conhecimento ZKTeco</p>
                    <a href="http://base-conhecimento:82/" target="_blank" class="btn btn-success">
                        <i class="bi bi-box-arrow-up-right me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-key-fill fs-1 text-success"></i>
                    </div>
                    <h5>Licenças de Software</h5>
                    <p class="text-muted small">Instruções sobre licenciamento</p>
                    <a href="{{ route('suporte.licencas') }}" class="btn btn-success">
                        <i class="bi bi-eye me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Materiais e Informações -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-folder-fill me-2"></i>Materiais e Informações</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('suporte.parametros') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-sliders2 text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Parâmetros para Equipamentos ZKTeco</h6>
                                    <small class="text-muted">Configurações para dispositivos standalone e Linux
                                        embarcado</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Documentação</span>
                                </div>
                            </div>
                        </a>
                        <a href="http://base-conhecimento:82/" target="_blank"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-book-fill text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Base de Conhecimento</h6>
                                    <small class="text-muted">Artigos e tutoriais técnicos</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Link Externo</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('suporte.licencas') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-key-fill text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Licenças ZKBioCVAccess</h6>
                                    <small class="text-muted">Informações e instruções sobre licenciamento de
                                        software</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-success">Documentação</span>
                                </div>
                            </div>
                        </a>
                        @can('gerenciar_suporte')
                            <a href="#" class="list-group-item list-group-item-action"
                                onclick="alert('Área administrativa - Em desenvolvimento')">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-plus-circle-fill text-success fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Adicionar Documento</h6>
                                        <small class="text-muted">Gerenciar materiais do setor de suporte</small>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-secondary">Admin</span>
                                    </div>
                                </div>
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('buscaDocumento').addEventListener('input', function () {
                const termo = this.value.toLowerCase();
                document.querySelectorAll('.list-group-item').forEach(item => {
                    const texto = item.innerText.toLowerCase();
                    if (texto.includes(termo)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);
            }

            .card {
                transition: transform 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
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