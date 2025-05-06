<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientValidateRequest;
use App\Models\Client;
use App\Services\ClientService;
class ClientController extends Controller
{
    public function index(ClientService $clientService)
    {
        $clients = $clientService->getAllClients();

        return view('clients.dashboard', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientValidateRequest $request, ClientService $clientService)
    {
        $clientService->createClient($request->validated());

        return redirect()->route('dashboard')->with('success', 'Cliente cadastrado com sucesso!');
    }
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }
    public function update(ClientValidateRequest $request, Client $client, ClientService $clientService)
    {
        $clientService->updateClient($request->validated(), $client);

        return redirect()->route('dashboard')->with('success', 'Cliente atualizado com sucesso!');
    }
    public function destroy(Client $client, ClientService $clientService)
    {
        $clientService->deleteClient($client);

        return redirect()->route('dashboard')->with('success', 'Cliente deletado com sucesso.');
    }
}
