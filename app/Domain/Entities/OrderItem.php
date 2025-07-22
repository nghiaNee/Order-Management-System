<?php
namespace App\Domain\Entities;

class OrderItem
{
    public function __construct(
        public string $product_code,
        public int $quantity,
        public float $unit_price
    ) {}
}

?>