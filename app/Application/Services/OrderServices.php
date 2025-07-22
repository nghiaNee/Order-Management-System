<?php
namespace App\Application\Services;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class OrderServices
{
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $total = 0;
            foreach ($data['items'] as $item) {
                $total += $item['unit_price'] * $item['quantity'];
            }

            $vat = $total * 0.1;
            $grandTotal = $total + $vat;

            $order = Order::create([
                'customer_name' => $data['customer_name'],
                'total_amount' => $total,
                'vat' => $vat,
                'grand_total' => $grandTotal,
            ]);

            foreach ($data['items'] as $item) {
                $order->items()->create($item);
            }

            return $order->load('items');
        });
    }
}

?>