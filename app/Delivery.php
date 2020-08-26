<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $guarded = [];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function deliveryProvider()
    {
        return $this->belongsTo(DeliveryProvider::class);
    }
}
