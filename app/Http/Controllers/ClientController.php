<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientValidateRequest;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients.dashboard', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientValidateRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image_url')) {
            $data['image_url'] = $this->storeImage($request);
        }

        Client::create($data);

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
    public function update(ClientValidateRequest $request, Client $client)
    {
        $data = $request->validated();

        if ($request->hasFile('image_url')) {
            $data['image_url'] = $this->storeImage($request);
        }

        $client->update($data);

        return redirect()->route('dashboard')->with('success', 'Cliente atualizado com sucesso!');
    }
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente deletado com sucesso.');
    }
    public function storeImage(ClientValidateRequest $request)
    {
        $request->validated();

        return$request->file('image_url')->store('images', 'public');
    }
}
