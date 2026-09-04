<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image'         => fake()->imageUrl(640, 480, 'food'),
            'category'      => fake()->randomElement(['makanan', 'kerajinan']),
            'category_icon' => 'lunch_dining',
            'name'          => fake()->words(3, true),
            'description'   => fake()->sentence(12),
            'price'         => fake()->numberBetween(10000, 50000),
            'variant'       => null,
            'seller_name'   => fake()->name(),
            'faculty'       => fake()->randomElement(['FEB', 'FSRD', 'FTP', 'FMIPA', 'FH']),
            'whatsapp'      => '628' . fake()->numerify('##########'),
            'net_weight'    => fake()->numberBetween(50, 250) . ' gram',
        ];
    }
}
