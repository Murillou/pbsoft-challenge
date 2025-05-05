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

        return redirect()->route('home');
    }
    public function show(Client $client)
    {
        //
    }
    public function edit(Client $client)
    {
        //
    }
    public function update(Request $request, Client $client)
    {
        //
    }
    public function destroy(Client $client)
    {
        //
    }
}
