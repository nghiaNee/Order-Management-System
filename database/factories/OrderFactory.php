<?php

namespace Database\Factories;

use App\Models\Order;
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
        protected $model = Order::class;
    public function definition(): array
    {
        return [
             'customer_name' => $this->faker->name(),
            'total_amount' => 0, // tạm để 0, sẽ cập nhật sau
            'vat' => 0,
            'grand_total' => 0,
        ];
    }
}
