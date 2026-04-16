@extends('layouts.app')

@section('title', 'Comercial - ZKTeco')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header com gradiente -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 bg-gradient-primary text-white"
                    style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="display-6 fw-bold mb-2">
                                    <i class="bi bi-briefcase-fill me-2"></i>Comercial
                                </h1>
                                <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                            </div>
                            <div class="text-end">
                                <i class="bi bi-graph-up display-1 opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards - Métricas rápidas centralizadas -->
        <div class="row mb-4 justify-content-center">
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Documentos</h6>
                                <h3 class="mb-0">{{ $documents->count() }}</h3>
                            </div>
                            <div class="rounded-circle bg-success bg-opacity-10 p-3">
                                <i class="bi bi-file-text-fill text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Regiões Atendidas</h6>
                                <h3 class="mb-0">{{ $areas->count() }}</h3>
                            </div>
                            <div class="rounded-circle bg-success bg-opacity-10 p-3">
                                <i class="bi bi-map-fill text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Consultores</h6>
                                <h3 class="mb-0">{{ $areas->unique('consultant')->count() }}</h3>
                            </div>
                            <div class="rounded-circle bg-success bg-opacity-10 p-3">
                                <i class="bi bi-people-fill text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Abas de navegação -->
        <ul class="nav nav-tabs mb-4" id="commercialTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents"
                    type="button" role="tab">
                    <i class="bi bi-folder2-open me-2"></i>Documentos
                    @auth
                        @if(auth()->user()->hasPermissionTo('gerenciar_documentos'))
                            <span class="badge bg-success ms-2">Gerenciar</span>
                        @endif
                    @endauth
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="map-tab" data-bs-toggle="tab" data-bs-target="#map" type="button" role="tab">
                    <i class="bi bi-map me-2"></i>Mapa de Atendimento
                </button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Aba Documentos -->
            <div class="tab-pane fade show active" id="documents" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        @auth
                            @if(auth()->user()->hasPermissionTo('gerenciar_documentos'))
                                <div class="mb-4 text-end">
                                    <a href="{{ route('commercial.documents.create') }}" class="btn btn-success btn-lg shadow-sm">
                                        <i class="bi bi-plus-circle me-2"></i>Adicionar Documento
                                    </a>
                                </div>
                            @endif
                        @endauth

                        @include('commercial.documents.partial-list', ['documents' => $documents])
                    </div>
                </div>
            </div>

            <!-- Aba Mapa -->
            <div class="tab-pane fade" id="map" role="tabpanel">
                @include('commercial.map', ['areas' => $areas])
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #196b01 0%, #8bee6c 100%);
            }

            .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
            }

            .nav-tabs .nav-link {
                border: none;
                font-weight: 500;
                padding: auto;
                color: grey;
                transition: all 0.3s;
            }

            .nav-tabs .nav-link:hover {
                color: #165f00;
                background-color: transparent;
                border-bottom: 3px solid #3cff00;
            }

            .nav-tabs .nav-link.active {
                color: #176100;
                background-color: transparent;
                border-bottom: 3px solid #00ff00;
            }

            .stat-card {
                background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Ativar tooltips do Bootstrap
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    @endpush
@endsection