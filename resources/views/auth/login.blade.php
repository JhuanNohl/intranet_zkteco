@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-5 col-lg-4">
                <div class=" card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <div class="text-center mb-4">
                        <img src="{{ asset('img/logo-zkteco.png') }}" alt="ZKTeco" height="80">
                        <h2 class="h4 mt-3 fw-bold text-success">Bem-vindo</h2>
                        <p class="text-muted">Faça login para acessar a intranet</p>
                    </div>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}"                    placeholder="seu.email@zkteco.com.br"
                            required autofocus>           @error('email') <div class="invalid-feedback">{{ $message }}
                                </div>
                            @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Digite sua senha" required>
                @error('password')
                                  <div class="invalid-feedback">{{ $message }}
                    </div>
                @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label text-muted" for="remember">Lembrar-me</label>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-lg rounded-3 fw-semibold">
                Entrar
            </button>
        </div>
        </form>
    </div>

    <div class="card-footer bg-white border-0 text-center pb-4">
        <p class="mb-0 text-muted">
            Não tem uma conta?
            <a href="{{ route('register') }}" class="text-success fw-semibold text-decoration-none">
                Registre-se
            </a>
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

        .form-control:focus {
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