<?php

namespace App\Aggregates;

use App\Product;
use App\StorableEvents\CartWasCreated;
use App\StorableEvents\ProductWasAddedToCart;
use App\StorableEvents\ProductWasRemovedFromCart;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;
use function money;

class CartAggregate extends AggregateRoot
{
    public function createCart(?int $customerId)
    {
        $this->recordThat(
            new CartWasCreated(
                $customerId
            )
        );

        return $this;
    }

    public function addToCart(Product $product)
    {
        $this->recordThat(
            new ProductWasAddedToCart(
                $product->id,
                $product->latestPrice->amount,
                $product->latestPrice->currency
            )
        );

        return $this;
    }

    public function removeFromCart(Product $product)
    {
        $this->recordThat(
            new ProductWasRemovedFromCart(
                $product->id,
                $product->latestPrice->amount,
                $product->latestPrice->currency
            )
        );

        return $this;
    }
}
