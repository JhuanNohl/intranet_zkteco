<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet ZKTeco - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Cores personalizadas ZKTeco */
        :root {
            --zkteco-green: #28a745;
            --zkteco-dark-green: #1e7e34;
            --zkteco-gray: #6c757d;
        }

        /* Paginação personalizada - Cores verdes */
        .pagination .page-link {
            color: #2e8b57;
            /* Verde para os números */
            border-color: #c8e6d9;
        }

        .pagination .page-link:hover {
            background-color: #2e8b57;
            color: white;
            border-color: #2e8b57;
        }

        .pagination .page-item.active .page-link {
            background-color: #2e8b57;
            border-color: #2e8b57;
            color: white;
        }

        .pagination .page-item.disabled .page-link {
            color: #a0c4a8;
            background-color: #f8f9fa;
            border-color: #e9ecef;
        }

        /* Texto "Showing X to Y of Z results" */
        .dataTables_info,
        .pagination-info,
        .text-muted small {
            color: #2e8b57 !important;
        }

        /* Botão principal verde */
        .btn-zkteco {
            background-color: var(--zkteco-green);
            border-color: var(--zkteco-green);
            color: white;
        }

        .btn-zkteco:hover {
            background-color: var(--zkteco-dark-green);
            border-color: var(--zkteco-dark-green);
            color: white;
        }

        /* Botão outline verde */
        .btn-outline-zkteco {
            border-color: var(--zkteco-green);
            color: var(--zkteco-green);
        }

        .btn-outline-zkteco:hover {
            background-color: var(--zkteco-green);
            color: white;
        }

        /* Links e destaques */
        .text-zkteco {
            color: var(--zkteco-green);
        }

        .bg-zkteco {
            background-color: var(--zkteco-green);
        }

        /* Cards com borda verde no hover */
        .card:hover {
            border-color: var(--zkteco-green);
        }
    </style>
</head>

<body>
    @include('components.header')

    <div class="layout-wrapper">
        @include('components.menu')

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

@auth
    <div class="flex items-center space-x-4">
        <span class="text-sm">{{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-600 hover:text-red-800 text-sm">
                Sair
            </button>
        </form>
    </div>
@endauth

</html>