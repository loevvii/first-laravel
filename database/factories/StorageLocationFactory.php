<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StorageLocation>
 */
class StorageLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(), // Storage location name
            'address' => $this->faker->address(), // Full address
            'capacity_small' => $this->faker->numberBetween(10, 50),
            'capacity_medium' => $this->faker->numberBetween(20, 100),
            'capacity_large' => $this->faker->numberBetween(5, 25),
        ];
    }
}