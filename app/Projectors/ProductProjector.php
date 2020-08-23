<?php

namespace App\Projectors;

use App\Cart;
use App\Product;
use App\StorableEvents\ProductWasAddedToCart;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class ProductProjector extends Projector
{
    protected $handlesEvents = [
        ProductWasAddedToCart::class
    ];

    public function onProductWasAddedToCart(ProductWasAddedToCart $event, string $aggregateUuid)
    {
        $cart = Cart::forCurrentUser($aggregateUuid);

        $cart->addItem(
            Product::findOrFail($event->productId),
            $event->quantity
        );
    }
}
