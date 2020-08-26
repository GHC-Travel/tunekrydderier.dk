<?php

namespace App\Http\Livewire;

use App\Cart as CartModel;
use App\Contracts\CurrentCart;
use App\Product;
use Livewire\Component;

class Cart extends Component
{
    use TracksCurrency;

    /**
     * @var CurrentCart|CartModel
     */
    public $cart;

    protected $listeners = [
        'productAdded' => '$refresh'
    ];

    public function mount(CurrentCart $cart)
    {
        $this->cart = $cart->loadMissing('items', 'items.product');
    }

    public function removeFromCart($productId)
    {
        $aggregate = $this->cart->aggregateRoot();

        $aggregate->removeFromCart(
            Product::findOrFail($productId)
        );

        $aggregate->persist();

        $this->emit('productRemovedFromCart', $productId);
    }

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);

        if ($product->stock <= 0) {
            return;
        }

        $aggregate = $this->cart->aggregateRoot();

        $aggregate->addToCart($product);

        $aggregate->persist();

        $this->emit('productAddedToCart', $productId);

        if ($product->refresh()->stock <= 0) {
            $this->emit('productStockHit');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
