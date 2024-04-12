<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order_Items>
 */
class Order_ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Product_id' => fake()->numberBetween(1, 10),
            'Order_id' => fake()->numberBetween(1, 10),
            'Quantity' => fake()->numberBetween(1, 10),
        ];
    }
}

