<?php

namespace App;

use App\Aggregates\CartAggregate;
use App\Contracts\CurrentCart;
use App\Enums\CartStatus;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model implements CurrentCart
{
    protected $guarded = [];

    protected $casts = [
        'status' => CartStatus::class,
        'abandoned_at' => 'timestamp',
        'purchased_at' => 'timestamp'
    ];

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

    public function aggregateRoot(): CartAggregate
    {
        return CartAggregate::retrieve($this->event_uuid);
    }

    public function addItem(Product $product)
    {
        $itemsQuery = $this->items()->where('event_uuid', $this->event_uuid)->where('product_id', $product->id);

        if ($itemsQuery->exists()) {
            $itemsQuery->increment('quantity', 1);
            $itemsQuery->increment('cost', (int)$product->latestPrice->amount);
        } else {
            $this->items()->create([
                // 'quantity' => 1,
                'product_id' => $product->id,
                'cost' => $product->latestPrice->amount,
                'event_uuid' => $this->event_uuid,
            ]);
        }

        return $this;
    }

    public function removeItem(Product $product)
    {
        $item = $this
            ->items()
            ->where('event_uuid', $this->event_uuid)
            ->where('product_id', $product->id)
            ->first();

        if (!$item) {
            return null;
        }

        if ($item->quantity > 1) {
            $item->decrement('quantity', 1);
            $item->decrement('cost', (int)$product->latestPrice->amount);
        } else {
            $item->delete();
        }

        return $this;
    }
}
