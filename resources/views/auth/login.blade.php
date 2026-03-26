@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="login-card">
        <div class="login-logo">
            <img src="{{ asset('img/logo-zkteco.png') }}" alt="ZKTeco">
            <h2>Intranet</h2>
            <p class="text-muted">Acesse sua conta</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    value="{{ old('email') }}" placeholder="email@example.com" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="••••••••" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Lembrar-me</label>
            </div>

            <button type="submit" class="btn btn-login w-100 text-white">
                Entrar
            </button>
        </form>

        <div class="login-footer">
            <p>&copy; {{ date('Y') }} ZKTeco - Todos os direitos reservados</p>
        </div>
    </div>
@endsection