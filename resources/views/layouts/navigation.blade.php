<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Intranet ZKTeco
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">🏠 Home</a>
                </li>

                <!-- CORPORATIVO Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="corporativoDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        🏢 CORPORATIVO
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="corporativoDropdown">
                        <li><a class="dropdown-item" href="{{ route('comercial') }}">Comercial</a></li>
                        <li><a class="dropdown-item" href="{{ route('departamento-pessoal') }}">Departamento Pessoal</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('financeiro') }}">Financeiro</a></li>
                    </ul>
                </li>

                <!-- ÁREA TÉCNICA Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="tecnicaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        🔧 ÁREA TÉCNICA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tecnicaDropdown">
                        <li><a class="dropdown-item" href="{{ route('desenvolvimento') }}">Desenvolvimento</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item ps-4" href="{{ route('integracoes.matriz') }}">📊 Matriz de
                                Integrações</a></li>
                        <li><a class="dropdown-item ps-4" href="{{ route('integracoes.index') }}">📟 Equipamentos</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('suporte') }}">Suporte</a></li>
                        <li><a class="dropdown-item" href="{{ route('ti') }}">T.I.</a></li>
                    </ul>
                </li>

                <!-- Outros setores (opcional) -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('treinamentos') }}">📚 Treinamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fabrica') }}">🏭 Fábrica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manutencao') }}">🔧 Manutenção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produtos') }}">📦 Produtos</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            👤 {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                🚪 {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>