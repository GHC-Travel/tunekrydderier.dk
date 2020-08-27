<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class DeliveryProvider extends Model
{
    protected $guarded = [];

    public function getInputIdAttribute()
    {
        return Str::snake($this->name, '_');
    }

    public function addresses()
    {
        return $this->hasMany(DeliveryProviderAddress::class);
    }
}
