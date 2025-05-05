<x-layout title="Editar - {{ $client->name }}">
    <x-client-form
    :action="route('clients.update', $client)"
    :client="$client"
    :buttonText="'Atualizar dados do cliente'" />
</x-layout>
