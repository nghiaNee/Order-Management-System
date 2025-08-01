<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validate([
            'product_code' => 'required|unique:products',
            'name' => 'required',
            'price' => 'required|numeric',
            'unit' => 'required'
        ]);

        return Product::create($data);
    }
}