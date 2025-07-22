<?php

namespace App\Http\Controllers\Api;

use App\Application\Services\OrderServices;
use App\Http\Controllers\Controller;
use App\Application\Services\OrderService;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(protected OrderServices $orderService) {}

    public function index(Request $request)
    {
        return Order::with('items')
            ->when($request->from_date, fn($q) => $q->whereDate('created_at', '>=', $request->from_date))
            ->when($request->to_date, fn($q) => $q->whereDate('created_at', '<=', $request->to_date))
            ->get();
    }

    public function store(StoreOrderRequest $request)
    {
        $data = $request->validate([
            'customer_name' => 'required|string',
            'items' => 'required|array|min:1',
            'items.*.product_code' => 'required|string',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.unit_price' => 'required|numeric|min:0',
        ]);

        return $this->orderService->create($data);
    }

    public function show($id)
    {
        return Order::with('items')->findOrFail($id);
    }
}

