<?php

namespace App;

use App\Enums\CartStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    protected $casts = [
        'status' => CartStatus::class,
        'abandoned_at' => 'timestamp',
        'purchased_at' => 'timestamp'
    ];

    public static function forCurrentUser(string $aggregateUuid): Cart
    {
        if (Session::has('cart_id')) {
            return static::findOrFail(
                Session::get('cart_id')
            );
        }

        return tap(Cart::create([
            'status' => CartStatus::FRESH,
            'customer_id' => Auth::id(),
            'event_uuid' => $aggregateUuid,
        ]), fn ($cart) => Session::put('cart_id', $cart->id));
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function events()
    {
        return $this->hasMany(StoredEvent::class, 'event_uuid', 'aggregate_uuid');
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function addItem(Product $product, int $quantity = 1)
    {
        $itemsQuery = $this->items()->where('event_uuid', $this->event_uuid)->where('product_id', $product->id);

        if ($itemsQuery->exists()) {
            $itemsQuery->increment('quantity', $quantity);
            $itemsQuery->increment('cost', $product->latestPrice->amount * $quantity);
        } else {
            $this->items()->create([
                'product_id' => $product->id,
                'cost' => $product->latestPrice->amount,
                'event_uuid' => $this->event_uuid,
            ]);
        }

        return $this;
    }
}
