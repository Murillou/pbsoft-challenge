<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientValidateRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients.home', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientValidateRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('images', 'public');
        }

        $data['social_name'] = $request->input('social_name') ?? null;

        Client::create($data);

        return redirect()->route('home')->with('success', 'Cliente cadastrado com sucesso!');
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
        $client->update($data);

        return redirect()->route('home')->with('success', 'Cliente atualizado com sucesso!');
    }
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente deletado com sucesso.');
    }
}
