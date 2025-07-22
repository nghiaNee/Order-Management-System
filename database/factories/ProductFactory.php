<?php

namespace Database\Factories;

use App\Infrastructure\Eloquent\Models\ProductModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = ProductModel::class;

    public function definition(): array
    {
        return [
            'product_code' => 'SP' . $this->faker->unique()->numerify('###'),
            'name' => $this->faker->words(2, true),
            'price' => $this->faker->randomFloat(2, 10000, 500000),
            'unit' => $this->faker->randomElement(['cái', 'hộp', 'chiếc']),
        ];
    }
}
