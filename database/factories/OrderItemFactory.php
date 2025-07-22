<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
            protected $model = OrderItem::class;
    public function definition(): array
    {
        return [
             'product_code' => 'SP001', // sẽ override bên ngoài
            'quantity' => $this->faker->numberBetween(1, 5),
            'unit_price' => 0, // sẽ override bằng giá sản phẩm
        ];
    }
}
