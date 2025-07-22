<?php
namespace App\Domain\Entities;

class Order
{
    public function __construct(
        public string $customer_name,
        public array $items = []
    ) {}
}

?>