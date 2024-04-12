<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order_Details>
 */
class Order_DetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'total' => fake()->randomFloat(2, 0, 1000),
            'subtotal' => fake()->randomFloat(2, 0, 1000),
            'Discount_id' => fake()->numberBetween(1, 10),
            'status' => fake()->randomElement(['pending', 'processing', 'completed']),
        ];
    }
}
