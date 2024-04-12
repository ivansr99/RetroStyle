<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart_Item>
 */
class Cart_ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Session_id' => fake()->numberBetween(1, 10),
            'Product_id' => fake()->numberBetween(1, 10),
            'Quantity' => fake()->numberBetween(1, 10),
        ];
    }
}

