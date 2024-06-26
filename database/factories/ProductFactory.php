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
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(1000, 100000),
            'origin' => fake()-> city(),
            'stock' => fake()-> randomDigit(),
            'imagen1' => fake()->imageUrl(1000, 1000, 'products', true, 'termo'),
            'imagen2' => fake()->imageUrl(1000, 1000, 'products', true, 'termo'),
            'imagen3' => fake()->imageUrl(1000, 1000, 'products', true, 'termo'),
            'imagen4' => fake()->imageUrl(1000, 1000, 'products', true, 'termo'),
        ];
    }
}
