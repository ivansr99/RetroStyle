<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form_Sell>
 */
class Form_SellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_product' => fake()->sentence(),
            'Description' => fake()->paragraph(),
            'Category' => fake()->word(),
            'Price' => fake()->randomFloat(2, 0, 1000),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}

