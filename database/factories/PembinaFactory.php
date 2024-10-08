<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembina>
 */
class PembinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'NIP' => fake()->numberBetween(1000000, 999999),
            'email' => fake()->email(),
            'contact' => fake()->numberBetween(10000000, 9999999),
        ];
    }
}
