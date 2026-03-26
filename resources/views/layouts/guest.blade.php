<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet ZKTeco - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            background: linear-gradient(135deg, #005c31 0%, #111111 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: white;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            margin: 20px;
        }

        .login-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-logo img {
            height: 80px;
            width: auto;
            margin-bottom: 15px;
        }

        .login-logo h2 {
            color: #005c31;
            font-weight: 700;
            font-size: 24px;
        }

        .btn-login {
            background: #005c31;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #00bb64;
            transform: translateY(-2px);
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: #005c31;
            box-shadow: 0 0 0 0.2rem rgba(0, 92, 49, 0.25);
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }

        .login-footer a {
            color: #005c31;
            text-decoration: none;
        }

        .login-footer a:hover {
            color: #00bb64;
        }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>