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
                                                <i
                                                    class="bi {{ $doc->type === 'file' ? 'bi-file-earmark-pdf-fill text-danger' : 'bi-link-45deg text-primary' }} me-2 fs-5"></i>
                                                <a href="{{ $doc->url }}" target="{{ $doc->type === 'link' ? '_blank' : '_self' }}"
                                                    class="text-decoration-none fw-semibold fs-5">
                                                    {{ $doc->title }}
                                                </a>
                                                @if($doc->type === 'link')
                                                    <span class="badge bg-info ms-2">Link</span>
                                                @else
                                                    <span class="badge bg-secondary ms-2">PDF/DOC</span>
                                                @endif
                                            </div>
                                            @if($doc->description)
                                                <p class="text-muted small mb-0 ms-4">{{ $doc->description }}</p>
                                            @endif
                                        </div>
                                        @can('update', $doc)
                                            <div class="ms-3">
                                                <!-- Botão EDITAR - Usando URL direta -->
                                                <a href="/commercial/documents/{{ $doc->id }}/edit" class="btn btn-warning btn-md me-2"
                                                    data-bs-toggle="tooltip" title="Editar documento" style="min-width: 80px;">
                                                    <i class="bi bi-pencil-square me-1"></i> Editar
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif