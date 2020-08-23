<?php

namespace App;

use App\Builders\ProductBuilder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function latestPrice()
    {
        return $this->hasOne(ProductPrice::class)->latest();
    }

    public function newEloquentBuilder($query)
    {
        return new ProductBuilder($query);
    }
}
