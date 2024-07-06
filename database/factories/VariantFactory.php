<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variant>
 */
class VariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'colour' => $this->faker->randomElement(['Red', 'Green', 'Blue', 'Yellow', 'Black']),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
        ];
    }
}
