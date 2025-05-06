<?php

namespace App\Services;
use App\Models\Client;

class ClientService
{
    public function getAllClients()
    {
        return Client::all();
    }

    public function createClient(array $data)
    {
        $data = $this->attachImage($data);

        Client::create($data);
    }

    public function updateClient(array $data, Client $client)
    {
        $data = $this->attachImage($data);

        $client->update($data);
    }

    public function deleteClient(Client $client)
    {
        $client->delete();
    }
    public function attachImage(array $data): array
    {
        if (isset($data['image_url'])) {
            $data['image_url'] = $data['image_url']->store('images', 'public');
        }

        return $data;
    }
}
