<?php
namespace App\Domain\Entities;

class Product
{
    public function __construct(
        public string $product_code,
        public string $name,
        public float $price,
        public string $unit,
    ) {}
}
?>