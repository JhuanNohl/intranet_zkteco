@extends('layouts.app')

@section('title', 'CIPA - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-shield-check me-2"></i>CIPA
                            </h1>
                        </div>
                        <a href="{{ route('gestao-pessoas') }}" class="btn btn-outline-light">
                            <i class="bi bi-arrow-left me-2"></i>Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Coluna Esquerda - DMS 2025 -->
        <div class="col-lg-5">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-calendar-heart fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">DMS 2025</h4>
                    </div>
                    <p class="text-muted small mt-2 mb-0">Diálogo Mensal de Segurança</p>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="{{ asset('storage/doc_rh/cipa/DMS-Saude-Mental.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                DMS Saúde Mental
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>

                        <a href="{{ asset('storage/doc_rh/cipa/DMS-Alcoolismo.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                DMS Alcoolismo
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>

                        <a href="{{ asset('storage/doc_rh/cipa/DMS-Dia-das-Mulheres.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                DMS Dia das Mulheres
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>

                        <a href="{{ asset('storage/doc_rh/cipa/DMS-Empilhadeira-Paleteira.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                DMS Empilhadeira e Paleteira
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coluna Direita - CIPA e Brigadistas -->
        <div class="col-lg-7">
            <div class="row g-4">
                <!-- CIPA ZKTeco -->
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 pt-4">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                    <i class="bi bi-building fs-4 text-success"></i>
                                </div>
                                <h4 class="mb-0 fw-bold">CIPA ZKTeco</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success bg-success bg-opacity-10 border-0">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                <strong>OBSERVAÇÃO - CIPA</strong>
                                <p class="mb-0 mt-2 small">
                                    A observação que a CIPA faz com base no estudo de resultados da avaliação
                                    do desempenho dos colaboradores revela uma tendência positiva. Os resultados
                                    indicam melhorias em todas as áreas avaliadas.
                                </p>
                            </div>

                            <a href="{{ asset('storage/doc_rh/cipa/CIPA-ZKTeco.pdf') }}"
                                class="btn btn-outline-success btn-sm" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-file-pdf me-2"></i>Documento Completo CIPA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Brigadista de Incêndio -->
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-0 pt-4">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-danger bg-opacity-10 p-2 me-3">
                                    <i class="bi bi-fire fs-4 text-danger"></i>
                                </div>
                                <h4 class="mb-0 fw-bold">Brigadista de Incêndio</h4>
                            </div>
                            <p class="text-muted small mt-2 mb-0">Brigada de Incêndio da ZKTeco</p>
                        </div>
                        <div class="card-body">
                            <p class="small text-muted mb-3">
                                A brigada de incêndio da ZKTeco está comprometida em combater o fogo
                                e garantir a segurança pública. A organização tem um plano de ação
                                centrado em prevenção, mitigação e resposta eficiente às emergências.
                            </p>

                            <h6 class="fw-bold mb-3">
                                <i class="bi bi-person-badge me-2 text-success"></i>
                                Brigadistas
                            </h6>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Amitado Luciana da Silva Pinto
                                        </li>
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Filipe Augusto de Almeida
                                        </li>
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Geraldo Júnior Silva Conde
                                        </li>
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Humberto Carlos Souza
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Olga Terezinha da Silva
                                        </li>
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Patricia Lúcia de Menezes
                                        </li>
                                        <li class="list-group-item px-0">
                                            <i class="bi bi-person-circle me-2 text-success"></i>
                                            Samuel Gomes da Silva
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-3">
                                <a href="{{ asset('storage/doc_rh/cipa/Brigada-de-Incendio.pdf') }}"
                                    class="btn btn-outline-danger btn-sm" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-file-pdf me-2"></i>Plano de Brigada de Incêndio
                                </a>
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
                background: linear-gradient(135deg, #2c3e50 0%, #7AC143 100%);
            }

            .list-group-item {
                transition: all 0.2s;
                border-left: 3px solid transparent;
            }

            .list-group-item:hover {
                background-color: #f8f9fa;
                border-left-color: #dc3545;
                transform: translateX(5px);
            }
        </style>
    @endpush
@endsection