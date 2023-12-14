<?php

namespace Database\Factories;

use App\Models\Shop;
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
            'shop_id' => Shop::inRandomOrder()->first()->id,
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' => fake()->randomNumber(2),
            'size' => fake()->randomElement(['S', 'M', 'L', 'XL']),
            'color' => fake()->safeColorName(),
            'images_url' => fake()->imageUrl(),
            'address' => fake()->address(),
        ];

    }
}
