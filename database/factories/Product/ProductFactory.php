<?php

namespace Database\Factories\Product;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $name = $this->faker->words(2, true);

    $bg = ltrim($this->faker->hexColor(), '#');
    $color = 'ffffff';

    $initials = collect(explode(' ', $name))
        ->map(fn ($word) => strtoupper(substr($word, 0, 1)))
        ->implode('+');

    return [
        'imagen' => "https://ui-avatars.com/api/?background={$bg}&color={$color}&name={$initials}",
        'name' => $name,
        'description' => $this->faker->sentence(),
        'price' => $this->faker->numberBetween(5000, 100000),
    ];
    }
}