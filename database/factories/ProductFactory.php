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
            'name' => $this->faker->unique()->randomElement(['Laravel Cap', 'Laravel T-Shirt', 'Laravel Hoodie', 'Laravel Mug', 'Laravel Book']),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numberBetween(10_00, 50_00),

        ];
    }
}
