<?php

namespace App\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductWasAddedToCart extends ShouldBeStored
{
    public int $productId;
    public int $quantity;
    public int $cost;

    public function __construct(int $productId, int $quantity, int $cost)
    {
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->cost = $cost;
    }
}
