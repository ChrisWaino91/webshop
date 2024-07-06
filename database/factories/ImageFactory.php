<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->unique()->randomElement([
                'media/image1.jpg',
                'media/image2.jpg',
                'media/image3.jpg',
                'media/image4.jpg',
                'media/image5.jpg',
                'media/image6.jpg',
                'media/image7.jpg',
                'media/image8.jpg',
                'media/image9.jpg',
                'media/image10.jpg',
                'media/image11.jpg',
                'media/image12.jpg',
            ])
        ];
    }
}
