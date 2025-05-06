<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->date(),
            'document' => $this->faker->boolean() ? $this->generateCpf() : $this->generateCnpj(),
            'social_name' => $this->faker->name(),
        ];
    }

    private function generateCpf()
    {
        return $this->faker->numerify('###.###.###-##');
    }

    private function generateCnpj()
    {
        return $this->faker->numerify('##.###.###/####-##');
    }
}
