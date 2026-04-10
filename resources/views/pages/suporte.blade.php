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
                            <p class="mb-0 opacity-75">ZKTeco | ZKNet</p>
                        </div>
                        <div>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                                <input type="text" id="buscaDocumento" class="form-control"
                                    placeholder="Pesquisar parâmetros...">
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
                        <i class="bi bi-sliders2 fs-1 text-primary"></i>
                    </div>
                    <h5>Parâmetros de Configuração</h5>
                    <p class="text-muted small">Documentação completa de parâmetros para equipamentos ZKTeco</p>
                    <a href="{{ route('suporte.parametros') }}" class="btn btn-primary">
                        <i class="bi bi-eye me-1"></i>Acessar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-file-text-fill fs-1 text-success"></i>
                    </div>
                    <h5>Base de Conhecimento</h5>
                    <p class="text-muted small">Artigos, tutoriais e guias rápidos</p>
                    <a href="#" class="btn btn-success disabled">
                        <i class="bi bi-eye me-1"></i>Em breve
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-warning bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-key-fill fs-1 text-warning"></i>
                    </div>
                    <h5>Licenças</h5>
                    <p class="text-muted small">Informações sobre licenciamento ZKBioCVAccess</p>
                    <a href="#" class="btn btn-warning disabled">
                        <i class="bi bi-eye me-1"></i>Em breve
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Escala de Almoço -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-calendar-week me-2"></i>Escala de Almoço - Time Suporte</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Horário</th>
                                    <th>Segunda</th>
                                    <th>Terça</th>
                                    <th>Quarta</th>
                                    <th>Quinta</th>
                                    <th>Sexta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">12:00 - 13:00</td>
                                    <td>Equipe A</td>
                                    <td>Equipe B</td>
                                    <td>Equipe C</td>
                                    <td>Equipe A</td>
                                    <td>Equipe B</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">13:00 - 14:00</td>
                                    <td>Equipe B</td>
                                    <td>Equipe C</td>
                                    <td>Equipe A</td>
                                    <td>Equipe B</td>
                                    <td>Equipe C</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                                <i class="bi bi-sliders2 text-primary fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Parâmetros para Equipamentos ZKTeco</h6>
                                    <small class="text-muted">Configurações para dispositivos standalone e Linux
                                        embarcado</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-primary">Documentação</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-bar-chart-fill text-success fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Indicadores de Suporte</h6>
                                    <small class="text-muted">Métricas e indicadores do time de suporte</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-secondary">Em breve</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-book-fill text-info fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Base de Conhecimento</h6>
                                    <small class="text-muted">Artigos e tutoriais técnicos</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-secondary">Em breve</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-key-fill text-warning fs-4 me-3"></i>
                                <div>
                                    <h6 class="mb-1">Licenças ZKBioCVAccess</h6>
                                    <small class="text-muted">Informações sobre licenciamento</small>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge bg-secondary">Em breve</span>
                                </div>
                            </div>
                        </a>
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
        </style>
    @endpush
@endsection