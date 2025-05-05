<x-layout title="{{ $client->name }}">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-md-5 text-center">
                <img
                    src="{{ $client->image_url ? asset('storage/' . $client->image_url) : asset('images/default-avatar.webp') }}"
                    alt="Foto de {{ $client->name }}"
                    class="rounded-circle shadow"
                    style="width:100%; max-width: 350px; height:350px;object-fit:cover;"
                    loading="lazy"
                >
            </div>

            <div class="col-md-7">
                <div class="d-flex flex-column gap-2">
                    <h1 class="fw-bold">{{ $client->name }}</h1>
                    <p class="fs-5"><strong> Data de aniversário: </strong> {{ \Carbon\Carbon::parse($client->birthday)->format('d/m/Y') }}</p>
                    <p class="fs-5"><strong> CPF ou CNPJ: </strong> {{ $client->document }}</p>
                    <p class="fs-5"><strong> Nome social: </strong> {{$client->social_name}}</p>

                    <div class="d-flex gap-4 mt-4">
                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary">Editar</a>
                        <form method="POST" action="{{ route('clients.destroy', $client) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
