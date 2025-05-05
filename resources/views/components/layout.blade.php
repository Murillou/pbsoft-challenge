<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - PBSoft</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    @if(route('home'))
        <nav>
            <h1 class="display-4 text-primary text-center pt-2">Gerenciador de Clientes</h1>
        </nav>
    @endif
    <main class="container d-flex justify-content-center align-items-center flex-grow-1 pt-4">
        {{ $slot }}
    </main>
</body>
</html>
