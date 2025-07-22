<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

          // Tạo 10 sản phẩm
   $products = Product::factory(10)->create();


    // Tạo 5 đơn hàng, mỗi đơn hàng có 2–4 sản phẩm
    Order::factory(5)->create()->each(function ($order) use ($products) {
        $total = 0;

        // Random 2-4 sản phẩm từ danh sách
        $items = $products->random(rand(2, 4));

        foreach ($items as $product) {
            $quantity = rand(1, 3);
            $unitPrice = $product->price;
            $subTotal = $unitPrice * $quantity;
            $total += $subTotal;

            OrderItem::create([
                'order_id' => $order->id,
                'product_code' => $product->product_code,
                'quantity' => $quantity,
                'unit_price' => $unitPrice,
            ]);
        }

        // Cập nhật lại tổng
        $vat = $total * 0.1;
        $grand = $total + $vat;
        $order->update([
            'total_amount' => $total,
            'vat' => $vat,
            'grand_total' => $grand,
        ]);
    });
    }
}
