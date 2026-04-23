<div class="row">
    <div class="col-md-5 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-0 pt-4">
                <h4 class="mb-0">
                    <i class="bi bi-people-fill text-success me-2"></i>Consultores por Região
                </h4>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionRegions">
                    @foreach($areas as $index => $area)
                        <div class="accordion-item border-0 mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }} bg-light rounded"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}">
                                    <div class="d-flex justify-content-between w-100 me-3">
                                        <strong class="text-success">{{ $area->region }}</strong>
                                        <span class="text-muted">{{ $area->consultant }}</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}"
                                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                data-bs-parent="#accordionRegions">
                                <div class="accordion-body">
                                    <div class="mb-2">
                                        <i class="bi bi-person-badge me-2 text-success"></i>
                                        <strong>Consultor(es):</strong> {{ $area->consultant }}
                                    </div>
                                    @if($area->states)
                                        <div class="mb-2">
                                            <i class="bi bi-geo-alt me-2 text-success"></i>
                                            <strong>Estados:</strong> {{ $area->states }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="alert alert-success mt-4 mb-0">
                    <i class="bi bi-success-circle-fill me-2"></i>
                    <strong>Observação:</strong> Regiões onde se encontra a Vale é atendido por
                    <strong>Ronaldo Lima</strong> (ES, RJ, MG, PA)
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-7 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-0 pt-4">
                <h4 class="mb-0">
                    <i class="bi bi-map-fill text-success me-2"></i>Mapa de Atendimento
                </h4>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/mapa-consultores.png') }}" alt="Mapa de Consultores por Região" class="img-fluid" style="max-height: 500px; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        .accordion-button:not(.collapsed) {
            background-color: #e7f1ff;
            color: #7AC143;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, .125);
        }
    </style>
@endpush