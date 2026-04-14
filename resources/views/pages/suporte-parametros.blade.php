@extends('layouts.app')

@section('title', 'Parâmetros - Equipamentos ZKTeco')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-sliders2 me-2"></i>Suporte Técnico
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | Parâmetros</p>
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

    <!-- Conteúdo dos Parâmetros -->
    <div class="row" id="conteudoParametros">
        <!-- CARTÕES -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-credit-card me-2"></i>Configuração de Cartões</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="~RFCardOn">~RFCardOn</td>
                                    <td>1</td>
                                    <td>Habilitar leitor RF</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="~MIFARE">~MIFARE</td>
                                    <td>1</td>
                                    <td>Habilitar cartão Mifare</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="~MIFAREID">~MIFAREID</td>
                                    <td>1</td>
                                    <td>Habilitar leitura ID do cartão</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="~IDBySerial">~IDBySerial</td>
                                    <td>0/1</td>
                                    <td>0=4 bytes / 1=3 bytes</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="MifareSerial">MifareSerial</td>
                                    <td>/dev/ttyS3</td>
                                    <td>Porta serial do leitor</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="IDCardStyle">IDCardStyle</td>
                                    <td>0-2</td>
                                    <td>Estilo do cartão ID</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="ReverseBytesOrders">ReverseBytesOrders</td>
                                    <td>1</td>
                                    <td>Inverter ordem dos bytes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- QR-CODE -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-qr-code me-2"></i>QR-Code</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="IsSupportQRcode">IsSupportQRcode</td>
                                    <td>1</td>
                                    <td>Habilitar suporte a QR-Code</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="QRCodeEnable">QRCodeEnable</td>
                                    <td>1</td>
                                    <td>Ativar QR-Code</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="DynamicQRCodeDec">DynamicQRCodeDec</td>
                                    <td>0/1</td>
                                    <td>0=Estático / 1= Dinâmico</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="QRCodeDataStream">QRCodeDataStream</td>
                                    <td>0/1</td>
                                    <td>Stream de dados QR-Code</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- COMUNICAÇÃO E REDE -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-wifi me-2"></i>Comunicação e Rede</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="NTPService">NTPService</td>
                                    <td>1</td>
                                    <td>Habilitar servidor NTP</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="MachineTZ">MachineTZ</td>
                                    <td>-0300</td>
                                    <td>Fuso horário (Brasília)</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="TZAdj">TZAdj</td>
                                    <td>-3</td>
                                    <td>Ajuste de fuso</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="COMKey">COMKey</td>
                                    <td>senha</td>
                                    <td>Visualizar senha de comunicação</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="IclockSvrFun">IclockSvrFun</td>
                                    <td>1</td>
                                    <td>Suporte a Push (1=Sim/0=Não)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODOS DE OPERAÇÃO -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-gear me-2"></i>Modos de Operação</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="AccessRuleType">AccessRuleType</td>
                                    <td>1</td>
                                    <td>1=Controle de Acesso</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="AccessRuleType">AccessRuleType</td>
                                    <td>0</td>
                                    <td>0=Controle de Ponto</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="DeviceType">DeviceType</td>
                                    <td>acc</td>
                                    <td>Modo Acesso</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="DeviceType">DeviceType</td>
                                    <td>att</td>
                                    <td>Modo Ponto</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="LockCount">LockCount</td>
                                    <td>4</td>
                                    <td>Quantidade de portas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- BIOMETRIA -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-fingerprint me-2"></i>Biometria</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="FingerFunOn">FingerFunOn</td>
                                    <td>1</td>
                                    <td>Habilitar impressão digital</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="PvFunOn">PvFunOn</td>
                                    <td>1</td>
                                    <td>Habilitar palma da mão</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="PhotoFunOn">PhotoFunOn</td>
                                    <td>1</td>
                                    <td>Habilitar foto do usuário</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="FVInterval">FVInterval</td>
                                    <td>valor</td>
                                    <td>Intervalo entre leitura de faces</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="~ZKFPVersion">~ZKFPVersion</td>
                                    <td>9/10</td>
                                    <td>Tipo de digital</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEGURANÇA -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Segurança e Alarmes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="SecureFunOn">SecureFunOn</td>
                                    <td>1</td>
                                    <td>Habilitar segurança</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="DoorAlarmStatus">DoorAlarmStatus</td>
                                    <td>0</td>
                                    <td>Desabilitar alarme de porta</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="AlarmStatus">AlarmStatus</td>
                                    <td>1</td>
                                    <td>Equipamento sem tamper</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="AntiPassbackOn">AntiPassbackOn</td>
                                    <td>1</td>
                                    <td>Habilitar Anti-Passback</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIDEO E SIP -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-camera-video me-2"></i>Vídeo e SIP</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="VisualIntercomFunOn">VisualIntercomFunOn</td>
                                    <td>1</td>
                                    <td>Habilitar intercomunicador</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="VideoProtocol">VideoProtocol</td>
                                    <td>4</td>
                                    <td>Protocolo de vídeo</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="VMSUserName">VMSUserName</td>
                                    <td>admin</td>
                                    <td>Usuário VMS</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="VMSPasswd">VMSPasswd</td>
                                    <td>senha</td>
                                    <td>Senha VMS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- USB E PERIFÉRICOS -->
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-usb me-2"></i>USB e Periféricos</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Parâmetro</th>
                                    <th>Valor</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="parametro-copy" data-param="USBClientPort">USBClientPort</td>
                                    <td>1</td>
                                    <td>Habilitar USB</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="~USBDisk">~USBDisk</td>
                                    <td>1</td>
                                    <td>Habilitar pendrive</td>
                                </tr>
                                <tr>
                                    <td class="parametro-copy" data-param="USB232On">USB232On</td>
                                    <td>1</td>
                                    <td>Habilitar USB serial</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Copiado -->
    <div class="modal fade" id="modalCopiado" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content bg-success text-white">
                <div class="modal-body text-center py-3">
                    <i class="bi bi-check-circle-fill fs-2"></i>
                    <p class="mb-0 mt-2">Parâmetro copiado!</p>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Função para copiar parâmetro
            document.querySelectorAll('.parametro-copy').forEach(element => {
                element.style.cursor = 'pointer';
                element.addEventListener('click', function () {
                    const parametro = this.dataset.param;
                    navigator.clipboard.writeText(parametro);

                    // Mostrar modal de feedback
                    const modal = new bootstrap.Modal(document.getElementById('modalCopiado'));
                    modal.show();
                    setTimeout(() => modal.hide(), 1000);
                });
            });

            // Função de busca
            document.getElementById('buscaParametro').addEventListener('input', function () {
                const termo = this.value.toLowerCase();
                const cards = document.querySelectorAll('#conteudoParametros .card');

                cards.forEach(card => {
                    let textoCard = card.innerText.toLowerCase();
                    if (textoCard.includes(termo)) {
                        card.style.display = '';
                        // Destacar células
                        const cells = card.querySelectorAll('td');
                        cells.forEach(cell => {
                            if (cell.innerText.toLowerCase().includes(termo)) {
                                cell.style.backgroundColor = '#fff3cd';
                            } else {
                                cell.style.backgroundColor = '';
                            }
                        });
                    } else {
                        card.style.display = 'none';
                    }
                });
            });

            function limparBusca() {
                document.getElementById('buscaParametro').value = '';
                const cards = document.querySelectorAll('#conteudoParametros .card');
                cards.forEach(card => {
                    card.style.display = '';
                    const cells = card.querySelectorAll('td');
                    cells.forEach(cell => cell.style.backgroundColor = '');
                });
            }
        </script>
    @endpush

    @push('styles')
        <style>
            .bg-gradient-primary {
                background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);
            }

            .parametro-copy {
                font-family: 'Courier New', monospace;
                font-weight: bold;
                transition: all 0.2s;
            }

            .parametro-copy:hover {
                background-color: #e7f1ff !important;
                transform: scale(1.02);
            }

            .table td,
            .table th {
                vertical-align: middle;
            }
        </style>
    @endpush
@endsection