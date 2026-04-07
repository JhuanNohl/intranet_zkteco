@php
    $categories = $documents->groupBy('category');
@endphp

@if($documents->isEmpty())
    <div class="text-center py-5">
        <div class="mb-4">
            <i class="bi bi-folder-x display-1 text-muted"></i>
        </div>
        <h4 class="text-muted">Nenhum documento cadastrado</h4>
        @can('create', App\Models\CommercialDocument::class)
            <p class="text-muted mb-4">Comece adicionando documentos importantes para o setor comercial.</p>
            <a href="{{ route('commercial.documents.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-2"></i>Adicionar Primeiro Documento
            </a>
        @endcan
    </div>
@else
    <div class="row">
        @foreach($categories as $category => $docs)
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 pt-4 pb-0">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                                <i class="bi bi-folder-fill text-primary"></i>
                            </div>
                            <h4 class="mb-0 fw-bold">{{ $category }}</h4>
                            <span class="badge bg-secondary ms-2">{{ $docs->count() }}</span>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="list-group list-group-flush">
                            @foreach($docs as $doc)
                                <div class="list-group-item px-0 py-3 border-0 border-bottom">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center mb-1">
                                                @php
                                                    // Determinar ícone baseado na extensão do arquivo
                                                    $icon = 'bi-file-earmark-text-fill';
                                                    $iconColor = 'text-secondary';
                                                    $isTableView = false;

                                                    if ($doc->type === 'file' && $doc->file_path) {
                                                        $extension = strtolower(pathinfo($doc->file_path, PATHINFO_EXTENSION));

                                                        // Verificar se é um arquivo HTML para tabela (pode criar um campo específico ou usar extensão .html)
                                                        if ($extension === 'html' || str_contains($doc->title, 'Parceiros') || str_contains($doc->title, 'Tabela')) {
                                                            $isTableView = true;
                                                        }

                                                        switch ($extension) {
                                                            case 'pdf':
                                                                $icon = 'bi-file-earmark-pdf-fill';
                                                                $iconColor = 'text-danger';
                                                                break;
                                                            case 'xlsx':
                                                            case 'xls':
                                                                $icon = 'bi-file-earmark-spreadsheet-fill';
                                                                $iconColor = 'text-success';
                                                                break;
                                                            case 'doc':
                                                            case 'docx':
                                                                $icon = 'bi-file-earmark-word-fill';
                                                                $iconColor = 'text-primary';
                                                                break;
                                                            case 'ppt':
                                                            case 'pptx':
                                                                $icon = 'bi-file-earmark-slides-fill';
                                                                $iconColor = 'text-warning';
                                                                break;
                                                            case 'html':
                                                            case 'htm':
                                                                $icon = 'bi-table';
                                                                $iconColor = 'text-info';
                                                                break;
                                                            default:
                                                                $icon = 'bi-file-earmark-fill';
                                                                $iconColor = 'text-secondary';
                                                        }
                                                    } elseif ($doc->type === 'link') {
                                                        $icon = 'bi-link-45deg';
                                                        $iconColor = 'text-primary';
                                                    }
                                                @endphp

                                                <i class="bi {{ $icon }} {{ $iconColor }} me-2 fs-5"></i>

                                                @if($isTableView)
                                                    <!-- Botão para abrir modal da tabela -->
                                                    <button type="button" class="btn btn-link p-0 m-0 text-start fw-semibold fs-5"
                                                        style="color: #000000; text-decoration: none;"
                                                        onmouseover="this.style.color='#0d6efd'; this.style.textDecoration='underline';"
                                                        onmouseout="this.style.color='#000000'; this.style.textDecoration='none';"
                                                        data-bs-toggle="modal" data-bs-target="#modalTable-{{ $doc->id }}">
                                                        {{ $doc->title }}
                                                    </button>
                                                @else
                                                    <!-- Link normal para outros documentos -->
                                                    <a href="{{ $doc->url }}" target="_blank" class="fw-semibold fs-5"
                                                        style="color: #000000; text-decoration: none;"
                                                        onmouseover="this.style.color='#0d6efd'; this.style.textDecoration='underline';"
                                                        onmouseout="this.style.color='#000000'; this.style.textDecoration='none';">
                                                        {{ $doc->title }}
                                                    </a>
                                                @endif

                                                @if($doc->type === 'link')
                                                    <span class="badge bg-info ms-2">Link</span>
                                                @else
                                                    @php
                                                        $extension = strtolower(pathinfo($doc->file_path, PATHINFO_EXTENSION));
                                                        $badgeText = 'Documento';
                                                        $badgeColor = 'bg-secondary';

                                                        switch ($extension) {
                                                            case 'pdf':
                                                                $badgeText = 'PDF';
                                                                $badgeColor = 'bg-danger';
                                                                break;
                                                            case 'xlsx':
                                                            case 'xls':
                                                                $badgeText = 'Excel';
                                                                $badgeColor = 'bg-success';
                                                                break;
                                                            case 'doc':
                                                            case 'docx':
                                                                $badgeText = 'Word';
                                                                $badgeColor = 'bg-primary';
                                                                break;
                                                            case 'ppt':
                                                            case 'pptx':
                                                                $badgeText = 'PowerPoint';
                                                                $badgeColor = 'bg-warning';
                                                                break;
                                                            case 'html':
                                                            case 'htm':
                                                                $badgeText = 'Tabela';
                                                                $badgeColor = 'bg-info';
                                                                break;
                                                        }
                                                    @endphp
                                                    <span class="badge {{ $badgeColor }} ms-2">{{ $badgeText }}</span>
                                                @endif
                                            </div>
                                            @if($doc->description)
                                                <p class="text-muted small mb-0 ms-4">{!! nl2br(e($doc->description)) !!}</p>
                                            @endif
                                        </div>
                                        @can('update', $doc)
                                            <div class="ms-3">
                                                <!-- Botão EDITAR - Usando URL direta -->
                                                <a href="/commercial/documents/{{ $doc->id }}/edit" class="btn btn-primary"
                                                    data-bs-toggle="tooltip" title="Editar documento" style="min-width: 80px;">
                                                    <i class="bi bi-pencil-square me-1"></i><span class="text-white">Editar</span>
                                                </a>

                                                <!-- Formulário EXCLUIR - Usando URL direta -->
                                                <form action="/commercial/documents/{{ $doc->id }}" method="POST" class="d-inline-block"
                                                    onsubmit="return confirm('Tem certeza que deseja excluir o documento \'{{ $doc->title }}\'? Esta ação não pode ser desfeita.');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-md" data-bs-toggle="tooltip"
                                                        title="Excluir documento" style="min-width: 80px;">
                                                        <i class="bi bi-trash me-1"></i> Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        @endcan
                                    </div>
                                </div>

                                <!-- Modal para tabela (se for o caso) -->
                                @if($isTableView)
                                    <div class="modal fade" id="modalTable-{{ $doc->id }}" tabindex="-1"
                                        aria-labelledby="modalTableLabel-{{ $doc->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title" id="modalTableLabel-{{ $doc->id }}">
                                                        <i class="bi bi-table me-2"></i>{{ $doc->title }}
                                                    </h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                        aria-label="Fechar"></button>
                                                </div>
                                                <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                                                    @php
                                                        $htmlContent = null;

                                                        // Se for arquivo HTML, ler o conteúdo do arquivo
                                                        if ($doc->type === 'file' && $doc->file_path && str_ends_with($doc->file_path, '.html')) {
                                                            $filePath = storage_path('app/public/' . $doc->file_path);
                                                            if (file_exists($filePath)) {
                                                                $htmlContent = file_get_contents($filePath);
                                                                // Extrair apenas o conteúdo da tabela ou do body
                                                                if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $htmlContent, $matches)) {
                                                                    $htmlContent = $matches[1];
                                                                }
                                                            }
                                                        }

                                                        // Se não conseguiu ler do arquivo, tenta usar a descrição
                                                        if (!$htmlContent && $doc->description && (str_contains($doc->description, '<table') || str_contains($doc->description, '<div'))) {
                                                            $htmlContent = $doc->description;
                                                        }
                                                    @endphp

                                                    @if($htmlContent)
                                                        <div class="table-responsive">
                                                            {!! $htmlContent !!}
                                                        </div>
                                                    @else
                                                        <div class="alert alert-warning">
                                                            <i class="bi bi-exclamation-triangle me-2"></i>
                                                            <strong>Conteúdo não disponível</strong><br>
                                                            O arquivo da tabela não pôde ser carregado ou está em formato inválido.
                                                        </div>
                                                        <div class="mt-3">
                                                            <p class="text-muted mb-1"><strong>Título:</strong> {{ $doc->title }}</p>
                                                            <p class="text-muted mb-1"><strong>Arquivo:</strong>
                                                                {{ basename($doc->file_path) }}</p>
                                                            <p class="text-muted mb-0"><strong>Descrição:</strong> {{ $doc->description }}
                                                            </p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        <i class="bi bi-x-circle me-1"></i>Fechar
                                                    </button>
                                                    <button type="button" class="btn btn-success"
                                                        onclick="exportTableToExcel('modalTable-{{ $doc->id }}')">
                                                        <i class="bi bi-file-earmark-excel me-1"></i>Exportar Excel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

<!-- Script para exportar tabela para Excel -->
@push('scripts')
    <script>
        function exportTableToExcel(modalId) {
            // Encontrar a tabela dentro do modal específico
            const modal = document.getElementById(modalId);
            if (!modal) return;

            const table = modal.querySelector('table');
            if (!table) {
                alert('Nenhuma tabela encontrada para exportar.');
                return;
            }

            // Clonar a tabela para não afetar a original
            const cloneTable = table.cloneNode(true);

            // Criar um arquivo HTML para exportação
            const html = `
            <html>
                <head>
                    <meta charset="UTF-8">
                    <title>Exportacao_Tabela</title>
                    <style>
                        th { background-color: #f2f2f2; }
                        th, td { border: 1px solid #ddd; padding: 8px; }
                        table { border-collapse: collapse; width: 100%; }
                    </style>
                </head>
                <body>
                    ${cloneTable.outerHTML}
                </body>
            </html>`;

            // Criar blob e download
            const blob = new Blob([html], { type: 'application/vnd.ms-excel' });
            const link = document.createElement('a');
            const url = URL.createObjectURL(blob);
            link.href = url;
            link.download = 'tabela_exportada.xls';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        }
    </script>
@endpush