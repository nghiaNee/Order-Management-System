<?php

namespace App\Infrastructure\Eloquent\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_code',
        'name',
        'price',
        'unit',
    ];
      public static function newFactory()
    {
        return ProductFactory::new();
    }
}
