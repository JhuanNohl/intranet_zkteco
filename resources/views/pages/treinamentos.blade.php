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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cards de Treinamentos -->
<div class="row" id="cardsTreinamentos">
    <!-- ZKBioAccessIVS -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-play-circle fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">ZKBioAccessIVS</h5>
                <p class="card-text text-muted small">Playlist de treinamento completo sobre ZKBioAccessIVS</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="https://www.youtube.com/watch?v=Jg4HJZpObfI&list=PLgW0B1kYy7-164-CKBSMJnZ7T8xrLY6Jp" target="_blank" 
                   class="btn btn-success w-100">
                    <i class="bi bi-play-fill me-1"></i>Assistir
                </a>
            </div>
        </div>
    </div>

    <!-- Licenciamento ZKBioAccessIVS -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-key-fill fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">Licenciamento ZKBioAccessIVS</h5>
                <p class="card-text text-muted small">Guia de licenciamento do sistema ZKBioAccessIVS</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="https://www.youtube.com/watch?v=V74fm7RkPDs" target="_blank" 
                   class="btn btn-success w-100">
                    <i class="bi bi-play-fill me-1"></i>Assistir
                </a>
            </div>
        </div>
    </div>

    <!-- ZKBioCVSecurity -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-shield-lock fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">ZKBioCVSecurity</h5>
                <p class="card-text text-muted small">Treinamento sobre segurança biométrica e controle de acesso</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="#" target="_blank" 
                   class="btn btn-success w-100 disabled">
                    <i class="bi bi-play-fill me-1"></i>Em breve
                </a>
            </div>
        </div>
    </div>

    <!-- Licenciamento ZKBioCVSecurity -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-certificate fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">Licenciamento ZKBioCVSecurity</h5>
                <p class="card-text text-muted small">Guia de licenciamento do ZKBioCVSecurity</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="#" target="_blank" 
                   class="btn btn-success w-100 disabled">
                    <i class="bi bi-play-fill me-1"></i>Em breve
                </a>
            </div>
        </div>
    </div>

    <!-- PDCA -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-diagram-2 fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">PDCA</h5>
                <p class="card-text text-muted small">Metodologia de melhoria contínua - Plan, Do, Check, Act</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="#" target="_blank" 
                   class="btn btn-success w-100 disabled">
                    <i class="bi bi-play-fill me-1"></i>Em breve
                </a>
            </div>
        </div>
    </div>

    <!-- Fundamentos de Redes - Cisco -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-diagram-3 fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">Fundamentos de Redes - Cisco</h5>
                <p class="card-text text-muted small">Conceitos básicos de redes e certificação Cisco</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="#" target="_blank" 
                   class="btn btn-success w-100 disabled">
                    <i class="bi bi-play-fill me-1"></i>Em breve
                </a>
            </div>
        </div>
    </div>

    <!-- Linux - 20 Comandos Básicos -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-terminal-fill fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">Linux - 20 Comandos Básicos</h5>
                <p class="card-text text-muted small">Aprenda os comandos essenciais do Linux</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="https://www.youtube.com/watch?v=uZeMQz89pfw" target="_blank" 
                   class="btn btn-success w-100">
                    <i class="bi bi-play-fill me-1"></i>Assistir
                </a>
            </div>
        </div>
    </div>

    <!-- CFTV - 2024 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-camera-video-fill fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">CFTV - 2024</h5>
                <p class="card-text text-muted small">Treinamento sobre sistemas de circuito fechado de TV</p>
            </div>
            <div class="card-footer bg-white border-top-0 d-flex gap-2">
                <a href="https://www.youtube.com/watch?v=8eKkZHjeCns&feature=youtu.be" target="_blank" 
                   class="btn btn-success flex-grow-1">
                    <i class="bi bi-play-fill me-1"></i>Parte 1
                </a>
                <a href="https://www.youtube.com/watch?v=RI6nOpQlowI" target="_blank" 
                   class="btn btn-success flex-grow-1">
                    <i class="bi bi-play-fill me-1"></i>Parte 2
                </a>
            </div>
        </div>
    </div>

    <!-- Testes -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icone-tipo">
                        <i class="bi bi-bug-fill fs-1 text-success"></i>
                    </div>
                </div>
                
                <h5 class="card-title">Testes</h5>
                <p class="card-text text-muted small">Playlist com metodologias e práticas de testes</p>
            </div>
            <div class="card-footer bg-white border-top-0">
                <a href="https://www.youtube.com/playlist?list=PL0eQEHzbcCCqI6i3p8mGJYb_RIN50ACtQ" target="_blank" 
                   class="btn btn-success w-100">
                    <i class="bi bi-play-fill me-1"></i>Assistir
                </a>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .hover-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
</style>
@endpush
@endsection