@extends('layouts.app')

@section('title', 'Gestão de Pessoas - ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-people-fill me-2"></i>Departamento Pessoal
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
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
                        <i class="bi bi-calendar-event fs-1 text-success"></i>
                    </div>
                    <h5>Comunicados e Avisos</h5>
                    <p class="text-muted small">Fique por dentro das novidades</p>
                    <a href="{{ route('comunicados.index') }}" class="btn btn-outline-success btn-sm">
                        <i class="bi bi-eye me-1"></i> Ver todos
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-shield-check fs-1 text-success"></i>
                    </div>
                    <h5>CIPA</h5>
                    <p class="text-muted small">Comissão Interna de Prevenção de Acidentes</p>
                    <a href="{{ route('rh.cipa') }}" class="btn btn-outline-success btn-sm">
                        <i class="bi bi-eye me-1"></i> Acessar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-block mb-3">
                        <i class="bi bi-bank fs-1 text-success"></i>
                    </div>
                    <h5>Sindicato</h5>
                    <p class="text-muted small">Convenções e acordos coletivos</p>
                    <a href="{{ route('rh.sindicato') }}" class="btn btn-outline-success btn-sm">
                        <i class="bi bi-eye me-1"></i> Acessar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Parcerias Educacionais -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-mortarboard-fill fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Parcerias Educacionais</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <!-- ANHANGUERA -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                            <i class="bi bi-building fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">ANHANGUERA</h6>
                                            <p class="text-muted small mb-0">
                                                <i class="bi bi-person-fill me-1"></i>Consultor(a): Renato Campos<br>
                                                <i class="bi bi-whatsapp me-1"></i>+55 (31) 9 8299-7393
                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-outline-success btn-copiar-contato w-100"
                                        data-contato="Renato Campos - (31) 98299-7393">
                                        <i class="bi bi-copy"></i> Copiar Contato
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- CC&A -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                            <i class="bi bi-building fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">CC&A</h6>
                                            <p class="text-muted small mb-0">
                                                <i class="bi bi-person-fill me-1"></i>Consultor(a): Kenia<br>
                                                <i class="bi bi-whatsapp me-1"></i>+55 (31) 9 9200-9269
                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-outline-success btn-copiar-contato w-100"
                                        data-contato="Kenia - (31) 99200-9269">
                                        <i class="bi bi-copy"></i> Copiar Contato
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- OPEN ENGLISH -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                            <i class="bi bi-building fs-4 text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold">OPEN ENGLISH</h6>
                                            <p class="text-muted small mb-0">
                                                <i class="bi bi-person-fill me-1"></i>Consultor(a): Everton<br>
                                                <i class="bi bi-whatsapp me-1"></i>+55 (84) 9 9119-7312
                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-outline-success btn-copiar-contato w-100"
                                        data-contato="Open English: Everton (84) 9119-7312">
                                        <i class="bi bi-copy"></i> Copiar Contato
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lista de Contatos -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-person-lines-fill fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Contatos e Telefonia</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">
                            <i class="bi bi-people me-2 text-success"></i>
                            Lista de Contatos
                        </h5>
                        <div class="input-group" style="max-width: 300px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" id="buscaContatos" class="form-control border-start-0"
                                placeholder="Buscar por nome, função ou email...">
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table class="table table-hover table-sm" id="tabelaContatos">
                            <thead class="table-light sticky-top">
                                <tr>
                                    <th>Nome</th>
                                    <th>Função</th>
                                    <th>Email</th>
                                    <th>Corporativo</th>
                                    <th>Ramal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Contatos Individuais -->
                                <tr>
                                    <td><strong>Gabriel Costa</strong></td>
                                    <td>Analista de Logística</td>
                                    <td>gabriel.costa@zkteco.com</td>
                                    <td>31 99674-1654</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4063</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Gustavo Rolo</strong></td>
                                    <td>Analista de Desenvolv. Software</td>
                                    <td>gustavo.henrique@zkteco.com</td>
                                    <td>31 99813-7391</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4079</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Jhuán Nohl</strong></td>
                                    <td>Assistente Técnico</td>
                                    <td>jhuan.nohl@zkteco.com</td>
                                    <td>31 9807-7743</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><strong>Juliano Torres</strong></td>
                                    <td>Gerente Técnico</td>
                                    <td>juliano.torres@zkteco.com</td>
                                    <td>31 99655-9489</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4056</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Leon Yang</strong></td>
                                    <td>Analista de Manufatura</td>
                                    <td>leon.yang@zkteco.com</td>
                                    <td>31 99973-3811</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><strong>Lorena Salomé</strong></td>
                                    <td>Analista Comercial</td>
                                    <td>lorena.salome@zkteco.com</td>
                                    <td>31 97136-8474</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4055</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Lucas Vinicius</strong></td>
                                    <td>Analista Pré Vendas</td>
                                    <td>lucas.vinicius@zkteco.com</td>
                                    <td>31 97153-8312</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><strong>Mateus Barbosa</strong></td>
                                    <td>Analista Técnico II</td>
                                    <td>mateus.barbosa@zkteco.com</td>
                                    <td>31 9807-7743</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4075</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Magna Silva</strong></td>
                                    <td>Executiva de Vendas</td>
                                    <td>magna.silva@zkteco.com</td>
                                    <td>31 9754-0452</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><strong>Nilce Correa</strong></td>
                                    <td>CEO</td>
                                    <td>nilce.correa@zkteco.com</td>
                                    <td>31 99780-8363</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4068</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Otávio Silva</strong></td>
                                    <td>Assistente Técnico</td>
                                    <td>otavio.silva@zkteco.com</td>
                                    <td>31 99915-9865</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4078</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Ronan Peixoto</strong></td>
                                    <td>Especialista Desenv. Software</td>
                                    <td>ronan.peixoto@zkteco.com</td>
                                    <td>31 99748-3398</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4095</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Patrícia Miranda</strong></td>
                                    <td>Coordenadora Administrativa</td>
                                    <td>patricia.oliveira1@zkteco.com</td>
                                    <td>31 7155-2329</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4073</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Samuel Silva</strong></td>
                                    <td>Assistente Técnico</td>
                                    <td>samuel.silva@zkteco.com</td>
                                    <td>31 99915-9865</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4102</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Saullo de Tharso</strong></td>
                                    <td>Analista de Suprimentos</td>
                                    <td>saullo.souza@zkteco.com</td>
                                    <td>31 99688-9741</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4072</span></td>
                                </tr>
                                <tr>
                                    <td><strong>William Wong</strong></td>
                                    <td>COO</td>
                                    <td>william.wong@zkteco.com</td>
                                    <td>31 99939-4804</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><strong>MANUTENÇÃO</strong></td>
                                    <td>Juliano, Otavio, Samuel Silva</td>
                                    <td>manutencao.brasil@zkteco.com</td>
                                    <td>31 99915-9865</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4075</span></td>
                                </tr>
                                <tr>
                                    <td><strong>SUPORTE</strong></td>
                                    <td>Juliano, Gustavo, Jhuán</td>
                                    <td>suporte.brasil@zkteco.com</td>
                                    <td>-</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4061</span></td>
                                </tr>
                                <tr>
                                    <td><strong>COMERCIAL SP</strong></td>
                                    <td>Todos os consultores SP</td>
                                    <td>comercial.saopaulo@zkteco.com</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><strong>VENDAS</strong></td>
                                    <td>Todos os consultores</td>
                                    <td>vendas.brasil@zkteco.com</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><strong>IMPORTAÇÃO</strong></td>
                                    <td>Patricia, Nilce, Saullo</td>
                                    <td>importacao.brasil@zkteco.com</td>
                                    <td>31 99688-9741</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4074</span></td>
                                </tr>
                                <tr>
                                    <td><strong>FINANCEIRO</strong></td>
                                    <td>Nilce, Patricia</td>
                                    <td>financeiro.brasil@zkteco.com</td>
                                    <td>31 99688-9741</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4057</span></td>
                                </tr>
                                <tr>
                                    <td><strong>RH</strong></td>
                                    <td>Nilce, Patricia</td>
                                    <td>rh.brasil@zkteco.com</td>
                                    <td>31 7155-2329</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4070</span></td>
                                </tr>
                                <tr>
                                    <td><strong>EXPEDIÇÃO</strong></td>
                                    <td>Juliano, Gabriel Costa</td>
                                    <td>expedicao.brasil@zkteco.com</td>
                                    <td>31 99645-9654</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">4072</span></td>
                                </tr>
                                <tr>
                                    <td><strong>PRODUTOS</strong></td>
                                    <td>Gustavo, Juliano</td>
                                    <td>produtos.brasil@zkteco.com</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Botão para abrir o Modal de Telefonia -->
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#modalTelefonia">
                            <i class="bi bi-telephone-fill me-2"></i>
                            Guia Rápido de Telefonia
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Telefonia -->
    <div class="modal fade" id="modalTelefonia" tabindex="-1" aria-labelledby="modalTelefoniaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="modalTelefoniaLabel">
                        <i class="bi bi-telephone-fill me-2"></i>
                        Guia Rápido de Telefonia
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <!-- Discagem -->
                        <div class="col-md-4">
                            <div class="card border-success h-100">
                                <div class="card-header bg-success bg-opacity-10 border-success">
                                    <i class="bi bi-telephone-fill me-2 text-success"></i>
                                    <strong>Discagem</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Mesmo DDD (31)</span>
                                        <p class="small mb-2">Digite o número e aperte chamar</p>
                                        <code class="bg-light p-2 d-block rounded">956854152</code>
                                    </div>
                                    <div>
                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">DDD Diferente</span>
                                        <p class="small mb-2">0 + DDD + Número</p>
                                        <code class="bg-light p-2 d-block rounded">011956854152</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Puxar Chamadas -->
                        <div class="col-md-4">
                            <div class="card border-success h-100">
                                <div class="card-header bg-success bg-opacity-10 border-success">
                                    <i class="bi bi-phone-fill me-2 text-success"></i>
                                    <strong>Puxar Chamadas</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Ramal
                                            Específico</span>
                                        <p class="small mb-2">*07 + Ramal que está tocando</p>
                                        <code class="bg-light p-2 d-block rounded">*07 4075</code>
                                    </div>
                                    <div>
                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Qualquer Ramal da
                                            Sala</span>
                                        <p class="small mb-2">*08</p>
                                        <code class="bg-light p-2 d-block rounded">*08</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Transferência -->
                        <div class="col-md-4">
                            <div class="card border-success h-100">
                                <div class="card-header bg-success bg-opacity-10 border-success">
                                    <i class="bi bi-arrow-left-right me-2 text-success"></i>
                                    <strong>Transferência</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Após Atender</span>
                                        <p class="small mb-2">*2 + Ramal de Destino</p>
                                        <code class="bg-light p-2 d-block rounded">*2 4056</code>
                                    </div>
                                    <div>
                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Antes de
                                            Atender</span>
                                        <p class="small mb-2">#1 + Ramal de Destino</p>
                                        <code class="bg-light p-2 d-block rounded">#1 4056</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Políticas e Orientações -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                            <i class="bi bi-file-text-fill fs-4 text-success"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Políticas e Orientações</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Coluna 1 -->
                        <div class="col-md-4">
                            <div class="list-group list-group-flush">
                                <a href="{{ asset('storage/doc_rh/Código-de-Conduta-ZK.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-file-earmark-text me-2"></i> Código de Conduta
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLÍTICA DAY OFF.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-calendar-week me-2"></i> Day Off
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLÍTICA-DE-FÉRIAS.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-suitcase-lg me-2"></i> Férias
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLITICA-VALE-REFEIÇÃOrev.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-egg-fried me-2"></i> Vale Refeição
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                            </div>
                        </div>
                        <!-- Coluna 2 -->
                        <div class="col-md-4">
                            <div class="list-group list-group-flush">
                                <a href="{{ asset('storage/doc_rh/POLÍTICA-HOME-OFFICE.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-house-door me-2"></i> Home Office
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLITICAVIAGENSrev.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-airplane me-2"></i> Viagens / Serviço Externo
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/09-ORGANOGRAMA-ZK-SETEMBRO.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-diagram-3 me-2"></i> Organograma
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLITICA-DE-REGISTRO-DE-PONTO-e-BANCO-DE-HORAS-(COMPENSAÇÃO)_v4.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-clock-history me-2"></i> Política de Registro de Ponto
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                            </div>
                        </div>
                        <!-- Coluna 3 -->
                        <div class="col-md-4">
                            <div class="list-group list-group-flush">
                                <a href="{{ asset('storage/doc_rh/POLÍTICA-UBER_99POP.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-car-front me-2"></i> Política Uber/99POP
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLITICA-REFEITORIO-CAFETEIRA.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-cup-straw me-2"></i> Uso Refeitório / Cafeteira
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLITICA-VALE-ALIMENTAÇÃO.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-basket me-2"></i> Vale Alimentação
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                                <a href="{{ asset('storage/doc_rh/POLITICA-VALE-COMBUSTIVEL.pdf') }}"
                                    class="list-group-item list-group-item-action" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="bi bi-fuel-pump me-2"></i> Vale Combustível
                                    <span class="badge bg-danger float-end">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão Admin (apenas para quem tem permissão) -->
    @can('gerenciar_dp')
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
            // Busca na tabela de contatos
            document.getElementById('buscaContatos').addEventListener('input', function () {
                const termo = this.value.toLowerCase();
                const tabela = document.getElementById('tabelaContatos');
                const linhas = tabela.getElementsByTagName('tr');

                for (let i = 2; i < linhas.length; i++) {
                    const linha = linhas[i];
                    const texto = linha.textContent.toLowerCase();

                    if (texto.includes(termo)) {
                        linha.style.display = '';
                    } else {
                        linha.style.display = 'none';
                    }
                }
            });

            // Copiar email ao clicar na linha
            document.querySelectorAll('#tabelaContatos tbody tr').forEach(linha => {
                linha.addEventListener('click', function () {
                    const email = this.cells[2]?.textContent.trim();
                    if (email && email !== '-') {
                        navigator.clipboard.writeText(email);

                        const originalBg = this.style.backgroundColor;
                        this.style.backgroundColor = '#d4edda';
                        this.style.transition = 'background-color 0.3s';

                        setTimeout(() => {
                            this.style.backgroundColor = originalBg;
                        }, 500);

                        const toast = document.createElement('div');
                        toast.className = 'position-fixed bottom-0 end-0 p-3';
                        toast.style.zIndex = '11';
                        toast.innerHTML = `
                                    <div class="toast show" role="alert">
                                        <div class="toast-header bg-success text-white">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            <strong class="me-auto">Email Copiado!</strong>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                                        </div>
                                        <div class="toast-body">
                                            ${email} copiado para a área de transferência.
                                        </div>
                                    </div>
                                `;
                        document.body.appendChild(toast);

                        setTimeout(() => {
                            toast.remove();
                        }, 3000);
                    }
                });
            });

            // Copiar contato
            document.querySelectorAll('.btn-copiar-contato').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const contato = this.dataset.contato;
                    navigator.clipboard.writeText(contato);

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
                background: linear-gradient(135deg, #2c3e50 0%, #7AC143 100%);
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

            #tabelaContatos tbody tr {
                cursor: pointer;
                transition: background-color 0.2s;
            }

            #tabelaContatos tbody tr:hover {
                background-color: #f8f9fa;
            }
        </style>
    @endpush
@endsection