<?php

namespace App\Aggregates;

use App\Product;
use App\StorableEvents\ProductWasAddedToCart;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class ProductAggregate extends AggregateRoot
{
    public int $totalCost = 0;

    public function addToCart(Product $product, int $quantity = 1)
    {
        $this->recordThat(
            new ProductWasAddedToCart(
                $product->id,
                $quantity,
                $product->latestPrice->amount * $quantity
            )
        );

        return $this;
    }

    public function applyProductWasAddedToCart(ProductWasAddedToCart $event)
    {
        $this->totalCost += $event->cost;
    }
}
