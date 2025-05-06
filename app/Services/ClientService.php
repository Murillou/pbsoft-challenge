<?php

namespace App\Services;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

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
        if (isset($data['image_url'])) {
            $this->deleteImageStorage($client);
            $data = $this->attachImage($data);
        }

        $client->update($data);
    }

    public function deleteClient(Client $client)
    {
        $this->deleteImageStorage($client);
        $client->delete();
    }
    public function attachImage(array $data): array
    {
        if (isset($data['image_url'])) {
            $data['image_url'] = $data['image_url']->store('images', 'public');
        }

        return $data;
    }
    private function deleteImageStorage(Client $client)
    {
        if ($client->image_url && Storage::disk('public')->exists($client->image_url)) {
            Storage::disk('public')->delete($client->image_url);
        }
    }

}
