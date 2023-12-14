<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'total_price' => fake()->randomNumber(2),
            'status' => fake()->randomElement(['pending', 'shipped']),
            'address' => fake()->address(),
            'wilaya' => fake()->city(),
        ];
    }
}
