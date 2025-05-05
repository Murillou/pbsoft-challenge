<x-layout title="Home">
    <div class="container">
        <div class="mb-5">
            <h2 class="h3 text-secondary">Clientes Cadastrados</h2>
        </div>

        <div class="text-center">
            <a href="{{ route('clients.create') }}" class="btn btn-success btn-lg">
                Registrar Novo Cliente
            </a>
        </div>

    </div>
</x-layout>
