@extends('layouts.app')

@section('title', 'Treinamentos')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 bg-gradient-primary text-white"
            style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
            <div class="card-body py-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="display-6 fw-bold mb-2">
                            <i class="bi bi-mortarboard-fill me-2"></i>Treinamentos
                        </h1>
                        <p class="mb-0 opacity-75">ZKTeco | ZKNet</p>
                    </div>
                    <div>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input type="text" id="buscaTreinamento" class="form-control" placeholder="Pesquisar...">
                        </div>
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
                <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-sm btn-outline-primary btn-categoria active" data-categoria="todos">
                            <i class="bi bi-grid-3x3-gap-fill"></i> Todos
                        </button>
                        <button class="btn btn-sm btn-outline-info btn-categoria" data-categoria="tecnico">
                            <i class="bi bi-gear-fill"></i> Técnico
                        </button>
                        <button class="btn btn-sm btn-outline-success btn-categoria" data-categoria="comercial">
                            <i class="bi bi-graph-up"></i> Comercial
                        </button>
                        <button class="btn btn-sm btn-outline-warning btn-categoria" data-categoria="gestao">
                            <i class="bi bi-people-fill"></i> Gestão
                        </button>
                        <button class="btn btn-sm btn-outline-danger btn-categoria" data-categoria="redes">
                            <i class="bi bi-wifi"></i> Redes
                        </button>
                    </div>
                    <div>
                        <button id="btnFavoritos" class="btn btn-sm btn-outline-warning">
                            <i class="bi bi-star-fill"></i> Favoritos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cards de Treinamentos -->
<div class="row" id="cardsTreinamentos">
    @foreach($treinamentos as $item)
    <div class="col-md-6 col-lg-4 mb-4 treinamento-card" 
         data-categoria="{{ $item->categoria }}"
         data-titulo="{{ strtolower($item->titulo) }}"
         data-favorito="{{ $item->favorito ? 'true' : 'false' }}">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-{{ $item->icone }} fs-1 text-primary"></i>
                    </div>
                    <button class="btn btn-sm btn-favorito {{ $item->favorito ? 'btn-warning' : 'btn-outline-secondary' }}" 
                            data-id="{{ $item->id }}">
                        <i class="bi bi-star{{ $item->favorito ? '-fill' : '' }}"></i>
                    </button>
                </div>
                
                <h5 class="card-title">{{ $item->titulo }}</h5>
                <p class="card-text text-muted small">{{ $item->descricao ?? 'Clique para acessar o conteúdo' }}</p>
                
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="text-muted small">
                        <i class="bi bi-folder"></i> {{ ucfirst($item->categoria) }}
                    </span>
                    <label class="cursor-pointer">
                        <input type="checkbox" class="form-check-input concluido" 
                               data-id="{{ $item->id }}" 
                               {{ $item->concluido ? 'checked' : '' }}>
                        <span class="small ms-1">Concluído</span>
                    </label>
                </div>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="{{ $item->url }}" target="{{ $item->abrir_nova_aba ? '_blank' : '_self' }}" 
                   class="btn btn-success w-100 btn-acessar" data-id="{{ $item->id }}">
                    <i class="bi bi-box-arrow-up-right me-1"></i>Acessar
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Barra de Progresso -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span><i class="bi bi-graph-up"></i> Seu Progresso</span>
                    <span id="progressoTexto">0%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div id="progressoBarra" class="progress-bar bg-success" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function atualizarProgresso() {
    const total = document.querySelectorAll('.concluido').length;
    const concluidos = document.querySelectorAll('.concluido:checked').length;
    const percentual = total > 0 ? (concluidos / total) * 100 : 0;
    document.getElementById('progressoBarra').style.width = percentual + '%';
    document.getElementById('progressoTexto').innerText = Math.round(percentual) + '%';
}

// Marcar concluído
document.querySelectorAll('.concluido').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        fetch('/treinamentos/' + this.dataset.id + '/concluir', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ concluido: this.checked })
        });
        atualizarProgresso();
    });
});

// Filtro por categoria
document.querySelectorAll('.btn-categoria').forEach(btn => {
    btn.addEventListener('click', function() {
        const categoria = this.dataset.categoria;
        document.querySelectorAll('.btn-categoria').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        document.querySelectorAll('.treinamento-card').forEach(card => {
            if (categoria === 'todos') {
                card.style.display = '';
            } else {
                card.style.display = card.dataset.categoria === categoria ? '' : 'none';
            }
        });
    });
});

// Busca
document.getElementById('buscaTreinamento').addEventListener('input', function() {
    const termo = this.value.toLowerCase();
    document.querySelectorAll('.treinamento-card').forEach(card => {
        const titulo = card.dataset.titulo;
        card.style.display = titulo.includes(termo) ? '' : 'none';
    });
});

// Favoritos
document.querySelectorAll('.btn-favorito').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.dataset.id;
        fetch('/treinamentos/' + id + '/favoritar', {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.favorito) {
                this.classList.remove('btn-outline-secondary');
                this.classList.add('btn-warning');
                this.querySelector('i').classList.add('bi-star-fill');
                this.querySelector('i').classList.remove('bi-star');
            } else {
                this.classList.remove('btn-warning');
                this.classList.add('btn-outline-secondary');
                this.querySelector('i').classList.remove('bi-star-fill');
                this.querySelector('i').classList.add('bi-star');
            }
        });
    });
});

atualizarProgresso();
</script>
@endpush

@push('styles')
<style>
    .hover-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .btn-categoria.active {
        background-color: #7AC143 !important;
        border-color: #7AC143 !important;
        color: white !important;
    }
</style>
@endpush
@endsection