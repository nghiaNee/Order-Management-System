<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'product_code' => 'SP001',
                'name' => 'Chuột không dây',
                'price' => 150000,
                'unit' => 'cái',
            ],
            [
                'product_code' => 'SP002',
                'name' => 'Bàn phím cơ',
                'price' => 500000,
                'unit' => 'cái',
            ],
            [
                'product_code' => 'SP003',
                'name' => 'Tai nghe bluetooth',
                'price' => 300000,
                'unit' => 'cái',
            ],
        ]);
    }
}
