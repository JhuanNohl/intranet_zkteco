<nav class="sidebar">
    <div class="menu-section-title">Principal</div>
    <a href="{{ route('home') }}" class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
        <span class="bi bi-house-door-fill menu-icon"></span> Início
    </a>

    <div class="menu-section-title">Corporativo</div>
    <a href="{{ route('comercial') }}" class="menu-link {{ request()->routeIs('comercial') ? 'active' : '' }}">
        <span class="bi bi-briefcase-fill menu-icon"></span> Comercial
    </a>
    <a href="{{ route('departamento-pessoal') }}"
        class="menu-link {{ request()->routeIs('departamento-pessoal') ? 'active' : '' }}">
        <span class="bi bi-people-fill menu-icon"></span> Departamento Pessoal
    </a>
    <a href="{{ route('financeiro') }}" class="menu-link {{ request()->routeIs('financeiro') ? 'active' : '' }}">
        <span class="bi bi-currency-dollar menu-icon"></span> Financeiro
    </a>

    <div class="menu-section-title">Área Técnica</div>
    <a href="{{ route('desenvolvimento') }}"
        class="menu-link {{ request()->routeIs('desenvolvimento') ? 'active' : '' }}">
        <span class="bi bi-code-slash menu-icon"></span> Desenvolvimento
    </a>
    <a href="{{ route('suporte') }}" class="menu-link {{ request()->routeIs('suporte') ? 'active' : '' }}">
        <span class="bi bi-headset menu-icon"></span> Suporte
    </a>
    <a href="{{ route('ti') }}" class="menu-link {{ request()->routeIs('ti') ? 'active' : '' }}">
        <span class="bi bi-pc-display menu-icon"></span> T.I.
    </a>
    <a href="{{ route('treinamentos') }}" class="menu-link {{ request()->routeIs('treinamentos') ? 'active' : '' }}">
        <span class="bi bi-mortarboard-fill menu-icon"></span> Treinamentos
    </a>

    <div class="menu-section-title">Operacional</div>
    <a href="{{ route('fabrica') }}" class="menu-link {{ request()->routeIs('fabrica') ? 'active' : '' }}">
        <span class="bi bi-building-fill menu-icon"></span> Fábrica
    </a>
    <a href="{{ route('manutencao') }}" class="menu-link {{ request()->routeIs('manutencao') ? 'active' : '' }}">
        <span class="bi bi-tools menu-icon"></span> Manutenção
    </a>
    <a href="{{ route('produtos') }}" class="menu-link {{ request()->routeIs('produtos') ? 'active' : '' }}">
        <span class="bi bi-box-seam menu-icon"></span> Produtos
    </a>
</nav>

@auth
    @if(auth()->user()->hasRole('supervisor') || auth()->user()->hasRole('admin'))
        <div class="menu-section-title">ADMINISTRAÇÃO</div>
        <a href="{{ route('comunicados.index') }}" class="menu-link">
            <span class="bi bi-megaphone-fill menu-icon"></span>
            <span>Gerenciar Comunicados</span>
        </a>
    @endif
@endauth