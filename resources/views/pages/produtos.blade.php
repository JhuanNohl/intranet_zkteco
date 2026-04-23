@extends('layouts.app')

@section('title', 'Produtos - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #0f0c29 0%, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-box-seam me-2"></i>Produtos
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorias -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-sm btn-outline-success btn-categoria active" data-categoria="todos">
                            <i class="bi bi-grid-3x3-gap-fill"></i> Todos
                        </button>
                        <button class="btn btn-sm btn-outline-success btn-categoria" data-categoria="faces">
                            <i class="bi bi-person-badge"></i> FACES
                        </button>
                        <button class="btn btn-sm btn-outline-success btn-categoria" data-categoria="cftv">
                            <i class="bi bi-camera-video"></i> CFTV
                        </button>
                        <button class="btn btn-sm btn-outline-success btn-categoria" data-categoria="documentos">
                            <i class="bi bi-file-text"></i> Documentos
                        </button>
                        <button class="btn btn-sm btn-outline-success btn-categoria" data-categoria="redes">
                            <i class="bi bi-hdd-network"></i> Pastas Rede
                        </button>
                        <button class="btn btn-sm btn-outline-success btn-categoria" data-categoria="anatel">
                            <i class="bi bi-shield-check"></i> ANATEL
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Documentos FACES -->
    <div class="row mb-4 categoria-group" data-categoria="faces">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-person-badge fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">FACES - Terminais Biométricos</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card h-100 border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-file-text-fill text-success fs-2"></i>
                                    <h6 class="mt-2">Especificações Técnicas</h6>
                                    <p class="text-muted small">Terminais FACES - Dados técnicos completos</p>
                                    <a href="#" class="btn btn-sm btn-outline-success disabled">
                                        <i class="bi bi-download"></i> Em breve
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-sliders2 text-success fs-2"></i>
                                    <h6 class="mt-2">Lista de Parâmetros</h6>
                                    <p class="text-muted small">Configurações e comandos para terminais FACES</p>
                                    <a href="#" class="btn btn-sm btn-outline-success disabled">
                                        <i class="bi bi-download"></i> Em breve
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-star-fill text-success fs-2"></i>
                                    <h6 class="mt-2">Recursos e Funcionalidades</h6>
                                    <p class="text-muted small">Mercado Brasileiro - Diferenciais e recursos</p>
                                    <a href="#" class="btn btn-sm btn-outline-success disabled">
                                        <i class="bi bi-download"></i> Em breve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Documentos CFTV -->
    <div class="row mb-4 categoria-group" data-categoria="cftv">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-camera-video fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">CFTV - Circuito Fechado de TV</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-table text-success fs-2"></i>
                                    <h6 class="mt-2">Planilha para Escolha de Produtos</h6>
                                    <p class="text-muted small">Selecione produtos por características técnicas</p>
                                    <a href="#" class="btn btn-sm btn-outline-success disabled">
                                        <i class="bi bi-download"></i> Em breve
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-printer text-success fs-2"></i>
                                    <h6 class="mt-2">Manual Impresso</h6>
                                    <p class="text-muted small">Para colocar dentro da caixa dos produtos</p>
                                    <a href="#" class="btn btn-sm btn-outline-success disabled">
                                        <i class="bi bi-download"></i> Em breve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ANATEL -->
    <div class="row mb-4 categoria-group" data-categoria="anatel">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-shield-check fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Homologações ANATEL</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success">
                                <i class="bi bi-success-circle-fill me-2"></i>
                                Produtos e módulos homologados pela ANATEL
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="bi bi-check-circle-fill text-success me-2"></i> Certificados
                                            ANATEL</span>
                                        <span class="badge bg-success">Em breve</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action disabled">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="bi bi-file-pdf-fill text-success me-2"></i> Declarações de
                                            Conformidade</span>
                                        <span class="badge bg-success">Em breve</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pastas de Rede -->
    <div class="row mb-4 categoria-group" data-categoria="redes">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-hdd-network fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Pastas de Rede</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-folder-fill text-success fs-2"></i>
                                    <h6 class="mt-2">Termo de Referência</h6>
                                    <p class="text-muted small">Z:\Produtos\Termo de Referencia</p>
                                    <button class="btn btn-sm btn-outline-success btn-copiar-caminho"
                                        data-caminho="Z:\\Produtos\\Termo de Referencia">
                                        <i class="bi bi-copy"></i> Copiar Caminho
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border shadow-sm">
                                <div class="card-body">
                                    <i class="bi bi-building fs-2 text-success"></i>
                                    <h6 class="mt-2">DWG Desenhos (AutoCAD)</h6>
                                    <p class="text-muted small">Z:\Documentos ZKTeco\06. Produtos\13. Documentos\DWG</p>
                                    <button class="btn btn-sm btn-outline-success btn-copiar-caminho"
                                        data-caminho="Z:\\Documentos ZKTeco\\06. Produtos\\13. Documentos\\DWG">
                                        <i class="bi bi-copy"></i> Copiar Caminho
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Documentos Gerais -->
    <div class="row categoria-group" data-categoria="documentos">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-folder-fill fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Documentos Gerais</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <i class="bi bi-file-earmark-text me-2"></i>
                            Catálogo de Produtos
                            <span class="badge bg-success float-end">Em breve</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <i class="bi bi-file-earmark-pdf me-2 text-success"></i>
                            Fichas Técnicas
                            <span class="badge bg-success float-end">Em breve</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action disabled">
                            <i class="bi bi-file-earmark-excel me-2 text-success"></i>
                            Matriz de Compatibilidade
                            <span class="badge bg-success float-end">Em breve</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão Admin (apenas para quem tem permissão) -->
    @can('gerenciar_produtos')
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button class="btn btn-outline-success btn-sm" onclick="alert('Área administrativa - Em desenvolvimento')">
                    <i class="bi bi-gear"></i> Gerenciar Documentos
                </button>
            </div>
        </div>
    @endcan

    @push('scripts')
        <script>
            // Busca de documentos
            document.getElementById('buscaDocumento').addEventListener('input', function () {
                const termo = this.value.toLowerCase();
                const cards = document.querySelectorAll('.categoria-group');

                cards.forEach(card => {
                    const texto = card.innerText.toLowerCase();
                    if (texto.includes(termo)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });

            // Filtro por categoria
            document.querySelectorAll('.btn-categoria').forEach(btn => {
                btn.addEventListener('click', function () {
                    const categoria = this.dataset.categoria;

                    document.querySelectorAll('.btn-categoria').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    document.querySelectorAll('.categoria-group').forEach(group => {
                        if (categoria === 'todos') {
                            group.style.display = '';
                        } else {
                            group.style.display = group.dataset.categoria === categoria ? '' : 'none';
                        }
                    });
                });
            });

            // Copiar caminho de rede
            document.querySelectorAll('.btn-copiar-caminho').forEach(btn => {
                btn.addEventListener('click', function () {
                    const caminho = this.dataset.caminho;
                    navigator.clipboard.writeText(caminho);

                    // Feedback visual
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="bi bi-check"></i> Copiado!';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);

                    // Alert com instrução
                    alert('Caminho copiado: ' + caminho + '\n\nCole no Explorador de Arquivos (Windows + R)');
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%);
            }

            .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }

            .btn-categoria.active {
                background-color: #302b63 !important;
                border-color: #302b63 !important;
                color: white !important;
            }

            .btn-copiar-caminho {
                cursor: pointer;
            }
        </style>
    @endpush
@endsection