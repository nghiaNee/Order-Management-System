<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'customer_name' => 'Nguyễn Văn A',
            'total_amount' => 950000,
            'vat' => 95000,
            'grand_total' => 1045000,
        ]);
    }
}
