@extends('layouts.guest')

@section('title', 'Criar Conta')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <div class="text-center mb-4">
                        <img src="{{ asset('img/logo-zkteco.png') }}" alt="ZKTeco" height="80">
                        <h2 class="h4 mt-3 fw-bold text-success">Criar Conta</h2>
                        <p class="text-muted">Preencha os dados para se cadastrar</p>
                    </div>
                </div>
                
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nome Completo <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}"
                                   placeholder="Digite seu nome completo"
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">E-mail <span class="text-danger">*</span></label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}"
                                   placeholder="seu.email@zkteco.com.br"
                                   required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="matricula" class="form-label fw-semibold">Matrícula</label>
                            <input type="text" 
                                   class="form-control @error('matricula') is-invalid @enderror" 
                                   id="matricula" 
                                   name="matricula" 
                                   value="{{ old('matricula') }}"
                                   placeholder="Digite sua matrícula">
                            @error('matricula')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cargo" class="form-label fw-semibold">Cargo</label>
                                <input type="text" 
                                       class="form-control @error('cargo') is-invalid @enderror" 
                                       id="cargo" 
                                       name="cargo" 
                                       value="{{ old('cargo') }}"
                                       placeholder="Ex: Analista">
                                @error('cargo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="setor" class="form-label fw-semibold">Setor</label>
                                <select class="form-select @error('setor') is-invalid @enderror" 
                                        id="setor" 
                                        name="setor">
                                    <option value="">Selecione o setor</option>
                                    <option value="Comercial" {{ old('setor') == 'Comercial' ? 'selected' : '' }}>Comercial</option>
                                    <option value="Departamento Pessoal" {{ old('setor') == 'Departamento Pessoal' ? 'selected' : '' }}>Departamento Pessoal</option>
                                    <option value="Financeiro" {{ old('setor') == 'Financeiro' ? 'selected' : '' }}>Financeiro</option>
                                    <option value="Importação" {{ old('setor') == 'Importação' ? 'selected' : '' }}>Importação</option>
                                    <option value="Desenvolvimento" {{ old('setor') == 'Desenvolvimento' ? 'selected' : '' }}>Desenvolvimento</option>
                                    <option value="Suporte" {{ old('setor') == 'Suporte' ? 'selected' : '' }}>Suporte</option>
                                    <option value="TI" {{ old('setor') == 'TI' ? 'selected' : '' }}>TI</option>
                                    <option value="Expedição" {{ old('setor') == 'Expedição' ? 'selected' : '' }}>Expedição</option>
                                    <option value="Fábrica" {{ old('setor') == 'Fábrica' ? 'selected' : '' }}>Fábrica</option>
                                    <option value="Manutenção" {{ old('setor') == 'Manutenção' ? 'selected' : '' }}>Manutenção</option>
                                </select>
                                @error('setor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="telefone" class="form-label fw-semibold">Telefone/Ramal</label>
                            <input type="text" 
                                   class="form-control @error('telefone') is-invalid @enderror" 
                                   id="telefone" 
                                   name="telefone" 
                                   value="{{ old('telefone') }}"
                                   placeholder="(11) 99999-9999">
                            @error('telefone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Senha <span class="text-danger">*</span></label>
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password"
                                   placeholder="Mínimo 8 caracteres"
                                   required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirmar Senha <span class="text-danger">*</span></label>
                            <input type="password" 
                                   class="form-control" 
                                   id="password_confirmation" 
                                   name="password_confirmation"
                                   placeholder="Digite a senha novamente"
                                   required>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg rounded-3 fw-semibold">
                                Criar Conta
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="card-footer bg-white border-0 text-center pb-4">
                    <p class="mb-0 text-muted">
                        Já tem uma conta? 
                        <a href="{{ route('login') }}" class="text-success fw-semibold text-decoration-none">Faça login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        animation: fadeInUp 0.5s ease;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .form-control:focus,
    .form-select:focus {
        border-color: #00bb64;
        box-shadow: 0 0 0 0.2rem rgba(0, 187, 100, 0.25);
    }
    
    .btn-success {
        background: linear-gradient(135deg, #005c31 0%, #00bb64 100%);
        border: none;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 92, 49, 0.3);
        background: linear-gradient(135deg, #005c31 0%, #00bb64 100%);
    }
    
    .btn-success:active {
        transform: translateY(0);
    }
    
    .text-success {
        color: #00bb64 !important;
    }
    
    .text-success:hover {
        color: #005c31 !important;
    }
</style>
@endpush