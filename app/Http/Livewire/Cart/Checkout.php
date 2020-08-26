<?php

namespace App\Http\Livewire\Cart;

use App\Cart as CartModel;
use App\Contracts\CurrentCart;
use App\Http\Livewire\TracksCurrency;
use Livewire\Component;

class Checkout extends Component
{
    use TracksCurrency;

    /**
     * @var CurrentCart|CartModel
     */
    public $cart;

    public function mount(CurrentCart $cart)
    {
        $this->cart = $cart->loadMissing('items', 'items.product');
    }

    public function render()
    {
        return view('livewire.cart.checkout');
    }
}
