<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         OrderItem::insert([
            [
                'order_id' => 1,
                'product_code' => 'SP001',
                'quantity' => 1,
                'unit_price' => 150000,
            ],
            [
                'order_id' => 1,
                'product_code' => 'SP002',
                'quantity' => 1,
                'unit_price' => 500000,
            ],
            [
                'order_id' => 1,
                'product_code' => 'SP003',
                'quantity' => 1,
                'unit_price' => 300000,
            ],
        ]);
    }
}
