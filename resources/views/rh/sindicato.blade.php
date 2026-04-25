@extends('layouts.app')

@section('title', 'Sindicato - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-bank me-2"></i>Sindicato
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
        <!-- Convenções Coletivas -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-file-text-fill fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Convenções Coletivas</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="{{ asset('storage/doc_rh/CONVENCAO-COLETIVA-TRABALHO.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                CONVENÇÃO COLETIVA 2024/2025
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>
                    </div>

                    <div class="alert alert-info bg-info bg-opacity-10 border-0 mt-4">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Informação</strong>
                        <p class="mb-0 small mt-1">
                            As convenções coletivas estabelecem as condições de trabalho aplicáveis
                            a todos os colaboradores da categoria.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Editais de Convocação METAVESP -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-megaphone-fill fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Editais de Convocação</h4>
                    </div>
                    <p class="text-muted small mt-2 mb-0">METAVESP - Sindicato Patronal</p>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="{{ asset('storage/doc_rh/EDITAL-DE-CONVOCACAO-CCT.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                2024 - Edital de Convocação METAVESP
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>

                        <a href="{{ asset('storage/doc_rh/EDITAL-DE-CONVOCACAO-PRESTACAO-DE-CONTAS-2024-2025.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                Edital de Convocação Assembleia Geral - METAVESP
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>

                        <a href="{{ asset('storage/doc_rh/EDITAL-DE-CONVOCACAO2025.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                2025 - Edital Convocação - METAVESP
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>

                        <a href="{{ asset('storage/doc_rh/EDITAL-DE-CONVOCACAO-CCT.pdf') }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                            target="_blank" rel="noopener noreferrer">
                            <span>
                                <i class="bi bi-file-pdf text-danger me-2"></i>
                                2024/2025 - Edital Convocação CCT - METAVESP
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-file-pdf-fill me-1"></i>PDF
                            </span>
                        </a>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded">
                        <h6 class="fw-bold">
                            <i class="bi bi-question-circle me-2 text-success"></i>
                            O que é METAVESP?
                        </h6>
                        <p class="small text-muted mb-0">
                            Sindicato da Indústria de Aparelhos Elétricos, Eletrônicos e Similares do
                            Estado de São Paulo, responsável pelas negociações coletivas da categoria.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações Adicionais -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm border-0 bg-success bg-opacity-5">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="fw-bold">
                                <i class="bi bi-envelope me-2 text-success"></i>
                                Dúvidas sobre Convenções ou Editais?
                            </h5>
                            <p class="mb-0 text-muted">
                                Entre em contato com o Departamento Pessoal para esclarecimentos.
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                            <a href="mailto:rh.brasil@zkteco.com" class="btn btn-success">
                                <i class="bi bi-envelope-fill me-2"></i>
                                rh.brasil@zkteco.com
                            </a>
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