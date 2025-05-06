<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - PBSoft</title>

    <link rel="icon" href="{{ asset('images/icon-browser.png') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    <nav>
        <a href="{{ route('dashboard') }}" class="text-decoration-none">
            <h1 class="display-4 text-primary text-center pt-2">Gerenciador de Clientes</h1>
        </a>
    </nav>

    @if (session('success'))
        <div class="alert alert-success text-center mt-4">
            {{ session('success') }}
        </div>
    @endif

    <main class="container d-flex justify-content-center align-items-center flex-grow-1 pt-4">
        {{ $slot }}
    </main>
</body>
</html>
