@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero-card">
        <div class="badge-soft">● Destaque da semana</div>
        <h1 class="hero-title">Bem-vindo à Intranet da ZKTeco!</h1>
        <p class="hero-subtitle">
            Na ZKTeco, estamos comprometidos em fornecer uma plataforma abrangente e eficiente para a comunicação e
            colaboração interna.
            Como uma das principais empresas de tecnologia de segurança e controle de acesso,
            reconhecemos a importância de manter nossos funcionários conectados e informados.
        </p>
        <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-light px-4 py-2 rounded-4 fw-bold" onclick="abrirModalComunicados()">
                Ver comunicados
            </button>
            <button class="btn btn-outline-light px-4 py-2 rounded-4 fw-bold">Abrir documentos</button>
        </div>
    </section>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="section-card h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 class="section-title mb-0">Vídeos</h2>
                    <a href="https://www.youtube.com/@ZKTecoBrasil/" target="_blank"
                        class="btn btn-outline-success rounded-4 px-3 fw-semibold">
                        Ver canal
                    </a>
                </div>
                <div class="video-grid">
                    <div class="video-card">
                        <div class="video-frame">
                            <iframe src="https://www.youtube.com/embed/hYGsjy09HJw" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-body">
                            <div class="video-title">Solução de Controle de Acesso</div>
                            <div class="video-desc">ZKTeco na Toca da Raposa.</div>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video-frame">
                            <iframe src="https://www.youtube.com/embed/JeUj3FGxm_g" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-body">
                            <div class="video-title">Controle de Acesso Sem Toque</div>
                            <div class="video-desc">Verificação biométrica sem toque.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 d-flex flex-column gap-4">
            <div class="section-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="section-title mb-0">Aniversariantes do Mês</h2>
                    <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2">Atualizado</span>
                </div>
                <div class="birthday-list">
                    <!-- Será preenchido pelo banco de dados -->
                </div>
            </div>

            <div class="section-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="section-title mb-0">Calendário 2026</h2>
                </div>
                <div class="calendar-container">
                    <img src="{{ asset('img/calendario-2026.png') }}" alt="Calendário 2026" class="calendar-img">
                </div>
            </div>
        </div>
    </div>

    <section class="section-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="section-title mb-0">Por dentro</h2>
            <a href="#" class="btn btn-outline-success rounded-4 px-3 fw-semibold">Ver tudo</a>
        </div>
        <div class="news-grid department-grid">
            <a href="{{ route('financeiro') }}"
                class="news-mini-card department-card text-decoration-none text-dark d-block">
                <div class="news-thumb">Financeiro</div>
                <div class="news-body">
                    <div class="news-tag">Última atualização</div>
                    <div class="news-title">Novo procedimento de reembolso e conferência financeira</div>
                    <div class="text-muted small">Abrir setor Financeiro</div>
                </div>
            </a>
            <a href="{{ route('expedicao') }}"
                class="news-mini-card department-card text-decoration-none text-dark d-block">
                <div class="news-thumb">Expedição</div>
                <div class="news-body">
                    <div class="news-tag">Última atualização</div>
                    <div class="news-title">Fluxo interno de separação, despacho e acompanhamento logístico</div>
                    <div class="text-muted small">Abrir setor Expedição</div>
                </div>
            </a>
            <a href="{{ route('comercial') }}"
                class="news-mini-card department-card text-decoration-none text-dark d-block">
                <div class="news-thumb">Comercial</div>
                <div class="news-body">
                    <div class="news-tag">Última atualização</div>
                    <div class="news-title">Materiais comerciais e apresentações revisadas</div>
                    <div class="text-muted small">Abrir setor Comercial</div>
                </div>
            </a>
            <a href="{{ route('desenvolvimento') }}"
                class="news-mini-card department-card text-decoration-none text-dark d-block">
                <div class="news-thumb">Desenvolvimento</div>
                <div class="news-body">
                    <div class="news-tag">Última atualização</div>
                    <div class="news-title">Treinamentos, documentos técnicos e firmwares atualizados</div>
                    <div class="text-muted small">Abrir setor Área Técnica</div>
                </div>
            </a>
        </div>
    </section>

    <!-- MODAL DE COMUNICADOS -->
    <div id="modalComunicados" class="modal-overlay" style="display: none;">
        <div class="modal-container">
            <div class="modal-header">
                <h2 class="modal-title">📢 Comunicados</h2>
                <button class="modal-close" onclick="fecharModalComunicados()">&times;</button>
            </div>
            <div class="modal-body" id="listaComunicados">
                <div class="text-center py-4">
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Carregando...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Função para abrir o modal de comunicados
        function abrirModalComunicados() {
            console.log('Abrindo modal...'); // Para debug
            const modal = document.getElementById('modalComunicados');
            if (modal) {
                modal.style.display = 'flex';
                carregarComunicados();
            } else {
                console.error('Modal não encontrado');
            }
        }

        // Função para fechar o modal
        function fecharModalComunicados() {
            console.log('Fechando modal...'); // Para debug
            const modal = document.getElementById('modalComunicados');
            if (modal) {
                modal.style.display = 'none';
            }
        }

        // Função para carregar comunicados via AJAX
        function carregarComunicados() {
            const container = document.getElementById('listaComunicados');
            if (!container) return;

            container.innerHTML = `
            <div class="text-center py-4">
                <div class="spinner-border text-success" role="status">
                    <span class="visually-hidden">Carregando...</span>
                </div>
            </div>
        `;

            fetch('/api/comunicados')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro na resposta');
                    }
                    return response.json();
                })
                .then(comunicados => {
                    // Atualizar contador
                    const contador = document.getElementById('totalComunicados');
                    if (contador) {
                        contador.innerText = comunicados.length;
                    }

                    if (comunicados.length === 0) {
                        container.innerHTML = `
                        <div class="text-center py-4">
                            <p class="text-muted">Nenhum comunicado no momento.</p>
                        </div>
                    `;
                        return;
                    }

                    container.innerHTML = comunicados.map(com => `
                    <div class="comunicado-card">
                        <div class="comunicado-titulo">${escapeHtml(com.titulo)}</div>
                        <div class="comunicado-conteudo">${escapeHtml(com.conteudo)}</div>
                        <div class="comunicado-meta">
                            <span class="comunicado-autor">📝 ${escapeHtml(com.autor || 'ZKTeco')}</span>
                            <span>📅 ${new Date(com.created_at).toLocaleDateString('pt-BR')}</span>
                        </div>
                    </div>
                `).join('');
                })
                .catch(error => {
                    console.error('Erro:', error);
                    container.innerHTML = `
                    <div class="text-center py-4">
                        <p class="text-danger">Erro ao carregar comunicados.</p>
                        <button class="btn btn-sm btn-outline-success mt-2" onclick="carregarComunicados()">Tentar novamente</button>
                    </div>
                `;
                });
        }

        // Função para escapar HTML (segurança)
        function escapeHtml(text) {
            if (!text) return '';
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // Fechar modal ao clicar fora
        document.addEventListener('click', function (event) {
            const modal = document.getElementById('modalComunicados');
            if (modal && event.target === modal) {
                fecharModalComunicados();
            }
        });

        // Fechar modal com tecla ESC
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                fecharModalComunicados();
            }
        });

        // Carregar contador de comunicados ao iniciar a página
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Página carregada, carregando comunicados...');
            fetch('/api/comunicados')
                .then(response => response.json())
                .then(comunicados => {
                    const contador = document.getElementById('totalComunicados');
                    if (contador) {
                        contador.innerText = comunicados.length;
                    }
                })
                .catch(error => console.error('Erro ao carregar contador:', error));
        });
    </script>

@endsection