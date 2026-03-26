<header class="topbar d-flex align-items-center px-3 px-lg-4">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="brand-box">
            <img src="{{ asset('img/logo-zkteco.png') }}" alt="ZKTeco" class="brand-logo">
            <div class="brand-text">Intranet</div>
        </div>

        <div class="d-flex align-items-center gap-3">
            @auth
                <div class="user-chip d-none d-md-flex align-items-center gap-2">
                    <span class="user-dot"></span>
                    <span>Olá, {{ Auth::user()->name }}</span>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Sair</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-brand">Entrar</a>
            @endauth
        </div>
    </div>
</header>