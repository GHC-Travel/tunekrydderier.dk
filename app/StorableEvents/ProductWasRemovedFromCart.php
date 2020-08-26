<?php

namespace App\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductWasRemovedFromCart extends ShouldBeStored
{
    public int $productId;
    public int $cost;
    public string $currency;

    /**
     * ProductWasRemovedFromCart constructor.
     * @param int $productId
     * @param int $cost
     * @param string $currency
     */
    public function __construct(int $productId, int $cost, string $currency)
    {
        $this->productId = $productId;
        $this->cost = $cost;
        $this->currency = $currency;
    }
}
