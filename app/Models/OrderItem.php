<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
     protected $fillable = ['order_id', 'product_code', 'quantity', 'unit_price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
