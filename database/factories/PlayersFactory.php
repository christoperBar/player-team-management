<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Players>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_player' => fake()->name(2),
            'umur' => rand(16, 30),
            'email' => fake()->unique()->safeEmail(),
            'role' => fake()->randomElement(['Duelist', 'Controller','Initiator','Sentinel']),
            'team_id' => rand(1, 16)
        ];
    }
}
