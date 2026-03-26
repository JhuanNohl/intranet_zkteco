<nav class="sidebar">
    <div class="menu-section-title">Principal</div>
    <a href="{{ route('home') }}" class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
        <span class="menu-icon">🏠</span> Início
    </a>

    <div class="menu-section-title">Corporativo</div>
    <a href="{{ route('comercial') }}" class="menu-link {{ request()->routeIs('comercial') ? 'active' : '' }}">
        <span class="menu-icon">💼</span> Comercial
    </a>
    <a href="{{ route('departamento-pessoal') }}" class="menu-link {{ request()->routeIs('departamento-pessoal') ? 'active' : '' }}">
        <span class="menu-icon">👥</span> Departamento Pessoal
    </a>
    <a href="{{ route('financeiro') }}" class="menu-link {{ request()->routeIs('financeiro') ? 'active' : '' }}">
        <span class="menu-icon">💰</span> Financeiro
    </a>
    <a href="{{ route('importacao') }}" class="menu-link {{ request()->routeIs('importacao') ? 'active' : '' }}">
        <span class="menu-icon">✈️</span> Importação
    </a>

    <div class="menu-section-title">Área Técnica</div>
    <a href="{{ route('desenvolvimento') }}" class="menu-link {{ request()->routeIs('desenvolvimento') ? 'active' : '' }}">
        <span class="menu-icon">💻</span> Desenvolvimento
    </a>
    <a href="{{ route('suporte') }}" class="menu-link {{ request()->routeIs('suporte') ? 'active' : '' }}">
        <span class="menu-icon">🛠️</span> Suporte
    </a>
    <a href="{{ route('ti') }}" class="menu-link {{ request()->routeIs('ti') ? 'active' : '' }}">
        <span class="menu-icon">🖥️</span> T.I.
    </a>
    <a href="{{ route('treinamentos') }}" class="menu-link {{ request()->routeIs('treinamentos') ? 'active' : '' }}">
        <span class="menu-icon">🎓</span> Treinamentos
    </a>

    <div class="menu-section-title">Operacional</div>
    <a href="{{ route('expedicao') }}" class="menu-link {{ request()->routeIs('expedicao') ? 'active' : '' }}">
        <span class="menu-icon">🚚</span> Expedição
    </a>
    <a href="{{ route('fabrica') }}" class="menu-link {{ request()->routeIs('fabrica') ? 'active' : '' }}">
        <span class="menu-icon">🏭</span> Fábrica
    </a>
    <a href="{{ route('manutencao') }}" class="menu-link {{ request()->routeIs('manutencao') ? 'active' : '' }}">
        <span class="menu-icon">🧰</span> Manutenção
    </a>
    <a href="{{ route('produtos') }}" class="menu-link {{ request()->routeIs('produtos') ? 'active' : '' }}">
        <span class="menu-icon">📦</span> Produtos
    </a>
</nav>