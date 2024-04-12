<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->sentence(),
            'Description' => fake()->paragraph(),
            'Price' => fake()->randomFloat(2, 0, 100),
            'Taxes' => fake()->randomFloat(2, 0, 20),
            'Image' => null,
            'brand_id' => fake()->numberBetween(1, 10),
            'Category_id' => fake()->numberBetween(1, 10),
            'Color_id' => fake()->numberBetween(1, 10),
            'Size_id' => fake()->numberBetween(1, 10),
        ];
    }
}


