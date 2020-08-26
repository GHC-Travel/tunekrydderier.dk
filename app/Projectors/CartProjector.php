<?php

namespace App\Projectors;

use App\Cart;
use App\Enums\CartStatus;
use App\Product;
use App\StorableEvents\CartWasCreated;
use App\StorableEvents\ProductWasAddedToCart;
use App\StorableEvents\ProductWasRemovedFromCart;
use Illuminate\Support\Facades\Auth;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class CartProjector extends Projector
{
    protected $handlesEvents = [
        CartWasCreated::class,
        ProductWasAddedToCart::class,
        ProductWasRemovedFromCart::class
    ];

    public function onCartWasCreated(CartWasCreated $event, string $aggregateUuid)
    {
        Cart::query()->create([
            'status' => CartStatus::OPEN,
            'customer_id' => $event->customerId,
            'event_uuid' => $aggregateUuid,
        ]);
    }

    public function onProductWasAddedToCart(ProductWasAddedToCart $event, string $aggregateUuid)
    {
        $cart = Cart::query()->firstWhere('event_uuid', $aggregateUuid);

        $product = Product::query()->findOrFail($event->productId);

        $cart->addItem($product);

        $cart->update([
            'total_cost' => $cart->items()->sum('cost')
        ]);

        $product->decrement('stock');
    }

    public function onProductWasRemovedFromCart(ProductWasRemovedFromCart $event, string $aggregateUuid)
    {
        $cart = Cart::query()->firstWhere('event_uuid', $aggregateUuid);

        $product = Product::query()->findOrFail($event->productId);

        $cart->removeItem($product);

        $cart->update([
            'total_cost' => $cart->items()->sum('cost')
        ]);

        $product->increment('stock');
    }
}
