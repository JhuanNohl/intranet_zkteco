@extends('layouts.app')

@section('title', 'Licenças de Software - Suporte ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-key-fill me-2"></i>Suporte Técnico
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | Licenças</p>
                        </div>
                        <div>
                            <a href="{{ route('suporte') }}" class="btn btn-light">
                                <i class="bi bi-arrow-left me-2"></i>Voltar ao Suporte
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Softwares -->
    <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-windows text-primary me-2"></i>
                        ZKBioAccess IVS
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Solução completa para controle de acesso e ponto.</p>
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Licenciamento:</strong> Baseado em número de usuários e dispositivos
                    </div>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Até 100 usuários</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Até 500 usuários</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Ilimitado</li>
                    </ul>
                    <button class="btn btn-outline-primary btn-sm btn-copiar"
                        data-text="ZKBioAccess IVS - Licenciamento por usuário">
                        <i class="bi bi-copy"></i> Copiar Informação
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-shield-lock text-success me-2"></i>
                        ZKBioCVSecurity
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Plataforma de segurança com reconhecimento facial.</p>
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Licenciamento:</strong> Por canal de câmera
                    </div>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-camera-video me-2"></i> 4 canais</li>
                        <li><i class="bi bi-camera-video me-2"></i> 8 canais</li>
                        <li><i class="bi bi-camera-video me-2"></i> 16 canais</li>
                        <li><i class="bi bi-camera-video me-2"></i> Ilimitado</li>
                    </ul>
                    <button class="btn btn-outline-success btn-sm btn-copiar"
                        data-text="ZKBioCVSecurity - Licenciamento por canal de câmera">
                        <i class="bi bi-copy"></i> Copiar Informação
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-door-closed text-warning me-2"></i>
                        ZKAccess 3.5
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Sistema legado para controle de acesso.</p>
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Atenção:</strong> Versão descontinuada - migrar para ZKBioAccess IVS
                    </div>
                    <button class="btn btn-outline-warning btn-sm btn-copiar"
                        data-text="ZKAccess 3.5 - Versão descontinuada. Migrar para ZKBioAccess IVS">
                        <i class="bi bi-copy"></i> Copiar Informação
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-cloud-upload text-info me-2"></i>
                        ZKBioCloud
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Solução em nuvem para controle de acesso.</p>
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Licenciamento:</strong> Assinatura mensal por dispositivo
                    </div>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-box-seam me-2"></i> Plano Básico: até 10 dispositivos</li>
                        <li><i class="bi bi-box-seam me-2"></i> Plano Profissional: até 50 dispositivos</li>
                        <li><i class="bi bi-box-seam me-2"></i> Plano Enterprise: Ilimitado</li>
                    </ul>
                    <button class="btn btn-outline-info btn-sm btn-copiar"
                        data-text="ZKBioCloud - Assinatura mensal por dispositivo">
                        <i class="bi bi-copy"></i> Copiar Informação
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Documentos de Licenciamento -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-file-text-fill me-2"></i>
                        Documentos de Referência
                    </h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                            Guia de Licenciamento ZKBioAccess IVS
                            <span class="badge bg-secondary float-end">Em breve</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                            Tabela de Preços de Licenças
                            <span class="badge bg-secondary float-end">Em breve</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <i class="bi bi-link-45deg text-primary me-2"></i>
                            Portal de Ativação de Licenças
                            <span class="badge bg-secondary float-end">Em breve</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Função para copiar texto
            document.querySelectorAll('.btn-copiar').forEach(btn => {
                btn.addEventListener('click', function () {
                    const texto = this.dataset.text;
                    navigator.clipboard.writeText(texto);

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
                background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);
            }

            .card {
                transition: transform 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
            }

            .btn-copiar {
                cursor: pointer;
            }
        </style>
    @endpush
@endsection