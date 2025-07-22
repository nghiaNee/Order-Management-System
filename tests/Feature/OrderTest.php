<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Infrastructure\Eloquent\Models\ProductModel;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_order_successfully()
    {
        $product = ProductModel::factory()->create([
            'product_code' => 'P001',
            'price' => 100,
        ]);

       $payload = [
    'customer_name' => 'John Doe',
    'items' => [    
        [
            'product_code' => 'P001',
            'quantity' => 2,
            'unit_price' => 100
        ]
    ]
];


        $response = $this->postJson('/api/orders', $payload);

        $response->assertStatus(201);
        $this->assertDatabaseHas('orders', ['customer_name' => 'John Doe']);
    }
}
