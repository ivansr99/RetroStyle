<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sizes>
 */
class sizesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->randomElement(['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL']),
        ];
    }
}

