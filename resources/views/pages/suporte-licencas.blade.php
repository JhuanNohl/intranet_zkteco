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
                                <i class="bi bi-key-fill me-2"></i>Licenciamento
                            </h1>
                            <p class="mb-0 opacity-75">Licenciamento de softwares ZKTeco. | INTRANET</p>
                        </div>
                        <div>
                            <a href="{{ route('suporte') }}" class="btn btn-outline-light">
                                <i class="bi bi-arrow-left me-2"></i>Voltar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de Softwares -->
    <div class="row mb-4">
        <!-- ZKBio CVAccess -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-shield-lock-fill text-primary me-2"></i>
                        ZKBio CVAccess
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted small">O ZKBio CVAccess é uma plataforma de segurança leve, baseada na web que
                        utiliza tecnologia biométrica híbrida e tecnologia de
                        visão computacional. Ele foi projetado para suportar a maioria dos hardwares ZKTeco e oferece uma
                        ampla gama de recursos para atender às necessidades de
                        gerenciamento de pequenas e médias empresas: Gerenciamento de Pessoal, Controle de Acesso, Controle
                        de Ponto, Controle de Visitantes, Videomonitoramento
                        Inteligente e Gerenciamento de Sistemas.
                    </p>

                    <div class="alert alert-success py-2">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Licenças:</strong> Z:\Suporte Técnico\10. Produtos ZK\Softwares\ZKBioCVAccess\27-01-2026 -
                        200 licenças
                    </div>

                    <div class="mb-3">
                        <strong>Links úteis:</strong>
                        <div class="mt-2">
                            <a href="https://www.zkteco.com.br/produto/zkbio-cvaccess/" target="_blank"
                                class="btn btn-sm btn-outline-success me-2 mb-1">
                                <i class="bi bi-box-arrow-up-right"></i> Página do Produto
                            </a>
                            <button class="btn btn-sm btn-outline-secondary btn-copiar mb-1"
                                data-text="https://www.zkteco.com.br/produto/zkbio-cvaccess/">
                                <i class="bi bi-copy"></i> Copiar Link
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <strong>Instruções:</strong>
                        <div class="mt-2">
                            <a href="{{ asset('storage/documentos/suporte/ZKBio CVAccess 4.0.0 Manual.pdf') }}"
                                target="_blank" class="btn btn-sm btn-outline-success me-2 mb-1">
                                <i class="bi bi-file-earmark-pdf-fill"></i> Manual do Usuário
                            </a>
                            <a href="https://www.youtube.com/watch?v=Jg4HJZpObfI&list=PLgW0B1kYy7-164-CKBSMJnZ7T8xrLY6Jp"
                                target="_blank" class="btn btn-sm btn-outline-success mb-1">
                                <i class="bi bi-file-earmark-pdf-fill"></i> Guia de Instalação
                            </a>
                        </div>
                    </div>

                    <div class="mt-3 pt-2 border-top">
                        <small class="text-muted">
                            <i class="bi bi-database"></i> Banco de dados: PostgreSQL, SQL Server, Oracle<br>
                            <i class="bi bi-people"></i> Capacidade: até 6.000 pessoas | 15 portas | 64 canais de
                            vídeo</br>200 Departamentos | Até 1000 visitantes por mês.
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- ZKBio CVSecurity -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-shield-lock-fill text-success me-2"></i>
                        ZKBio CVSecurity
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted small">O ZKBio CVSecurity oferece uma plataforma de segurança abrangente baseada na
                        web,
                        com a adoção de tecnologias híbridas de biometria e visão computacional. Ela contém vários módulos:
                        Pessoal,
                        Controle de Ponto, Controle de Acesso, Gestão de Visitantes, Estacionamento, Controle de Elevadores,
                        FaceKiosk,
                        Gestão Inteligente de Vídeo, Módulo de Detecção de Máscara e Temperatura, Consumo Online/Offline,
                        Patrulha,
                        Cenas Inteligentes, Central de Operações, Central de Serviços e outros subsistemas inteligentes.</p>

                    <div class="alert alert-success py-2">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Licenças:</strong> Os dois servidores de licenciamento disponíveis para este software, estão
                        localizado na página principal
                        do suporte técnico.
                    </div>

                    <div class="mb-3">
                        <strong>🔗 Links úteis:</strong>
                        <div class="mt-2">
                            <a href="https://www.zkteco.com.br/produto/zkbio-cvsecurity/" target="_blank"
                                class="btn btn-sm btn-outline-success me-2 mb-1">
                                <i class="bi bi-box-arrow-up-right"></i> Página do Produto
                            </a>
                            <button class="btn btn-sm btn-outline-secondary btn-copiar mb-1"
                                data-text="https://www.zkteco.com.br/produto/zkbio-cvsecurity/">
                                <i class="bi bi-copy"></i> Copiar Link
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <strong>Manuais (PDF):</strong>
                        <div class="mt-2">
                            <a href="https://www.zkteco.com.br/site_marketing/Manuais_CVSecurity_5.3.0.zip" target="_blank"
                                class="btn btn-sm btn-outline-success me-2 mb-1">
                                <i class="bi bi-file-earmark-pdf-fill"></i> Manual do Usuário
                            </a>
                            <a href="https://www.youtube.com/playlist?list=PLgW0B1kYy7-2orggkApMQy4I9EhCey-wO"
                                class="btn btn-sm btn-outline-success mb-1 disabled">
                                <i class="bi bi-file-earmark-pdf-fill"></i> Guia de Instalação
                            </a>
                        </div>
                    </div>

                    <div class="mt-3 pt-2 border-top">
                        <small class="text-muted">
                            <i class="bi bi-database"></i> Banco de dados: PostgreSQL, SQL Server, Oracle<br>
                            <i class="bi bi-people"></i> Capacidade: até 300.000 pessoas | 5.000 portas | 1.024 canais de
                            vídeo<br>
                            <i class="bi bi-check-circle-fill text-success"></i> API e App disponíveis
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- ZKAccess 3.5 -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-door-closed text-warning me-2"></i>
                        ZKAccess 3.5
                    </h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning py-2">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Atenção:</strong> Software descontinuado. Não recebe mais atualizações nem suporte a
                        novos equipamentos.
                    </div>

                    <p class="text-muted small mt-2">Solução legada para controle de acesso básico. Recomenda-se migrar para
                        ZKBio CVAccess ou ZKBio CVSecurity.</p>

                    <div class="mb-3">
                        <strong>🔗 Download:</strong>
                        <div class="mt-2">
                            <a href="https://www.zkteco.com.br/produto/zkaccess-3-5/" target="_blank"
                                class="btn btn-sm btn-outline-success me-2 mb-1">
                                <i class="bi bi-download"></i> Página de Download
                            </a>
                            <button class="btn btn-sm btn-outline-secondary btn-copiar mb-1"
                                data-text="https://www.zkteco.com.br/produto/zkaccess-3-5/">
                                <i class="bi bi-copy"></i> Copiar Link
                            </button>
                        </div>
                    </div>

                    <div class="mt-3 pt-2 border-top">
                        <small class="text-muted">
                            <i class="bi bi-windows"></i> Windows 7/8/10/11 (32/64 bits)<br>
                            <i class="bi bi-people"></i> Capacidade: até 2.000 pessoas | 25 portas
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- ZKBio Ponto -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        <i class="bi bi-clock-history text-info me-2"></i>
                        ZKBio Ponto
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted small">Software especializado em gestão de ponto eletrônico.</p>

                    <div class="alert alert-info py-2">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Sobre:</strong> ZKBio Ponto é o software da ZKTeco para gestão de ponto eletrônico.
                        Centraliza a coleta das marcações dos relógios, o tratamento automático de jornadas
                        (atrasos, faltas, horas extras, banco de horas, adicional noturno), fluxo de
                        justificativas/aprovação e a emissão do espelho de ponto. Oferece dashboards, relatórios exportáveis
                        (PDF/Excel).
                    </div>

                    <div class="mb-3">
                        <strong>Download:</strong>
                        <div class="mt-2">
                            <a href="https://www.zkteco.com.br/produto/zkbio-ponto/" target="_blank"
                                class="btn btn-sm btn-outline-success me-2 mb-1">
                                <i class="bi bi-download"></i> Página de Download
                            </a>
                            <button class="btn btn-sm btn-outline-secondary btn-copiar mb-1"
                                data-text="https://www.zkteco.com.br/produto/zkbio-ponto/">
                                <i class="bi bi-copy"></i> Copiar Link
                            </button>
                        </div>
                    </div>

                    <div class="mt-3 pt-2 border-top">
                        <small class="text-muted">
                            <i class="bi bi-phone"></i> App disponível para dispositivos móveis<br>
                            <i class="bi bi-infinity"></i> Capacidade ilimitada de pessoas e portas
                        </small>
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