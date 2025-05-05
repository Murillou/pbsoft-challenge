<x-layout title="Dashboard">
    <div class="container py-4">
        <h2 class="h3 text-secondary mb-4">Clientes Cadastrados</h2>

        @if($clients->isEmpty())
            <div class="alert alert-warning" role="alert">
                Não há clientes cadastrados.
            </div>
        @endif

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach($clients as $client)
                <div class="col">
                    <div class="card shadow-sm border-0 rounded-3 h-100 p-3">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img
                                src="{{ $client->image_url ? asset('storage/' . $client->image_url) : asset('images/default-avatar.webp') }}"
                                alt="Foto de {{ $client->name }}"
                                class="rounded-circle"
                                style="width:60px;height:60px;object-fit:cover;"
                                loading="lazy"
                            >
                            <h5 class="mb-0 fw-semibold text-primary">{{ $client->name }}</h5>
                        </div>

                        <ul class="list-unstyled small text-muted mb-3">
                            <li>
                                <strong>Data de nascimento:</strong>
                                <time datetime="{{ \Carbon\Carbon::parse($client->birthday)->toDateString() }}">
                                    {{ \Carbon\Carbon::parse($client->birthday)->format('d/m/Y') }}
                                </time>
                            </li>
                            <li><strong>Documento (CPF ou CNPJ):</strong> {{ $client->document }}</li>
                            <li><strong>Nome Social:</strong> {{ $client->social_name }}</li>
                        </ul>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('clients.show', $client) }}" class="btn btn-outline-info btn-sm">Ver</a>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('clients.create') }}" class="btn btn-success btn-lg">
                Registrar Novo Cliente
            </a>
        </div>
    </div>
</x-layout>
