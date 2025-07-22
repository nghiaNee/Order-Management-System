<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory as EloquentFactory;

class Product extends Model
{
        use HasFactory;
     protected $fillable = ['product_code', 'name', 'price', 'unit'];
}
