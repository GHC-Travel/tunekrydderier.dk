<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\ProductPrice;
use Faker\Generator as Faker;

$factory->define(ProductPrice::class, function (Faker $faker) {
    return [
        'product_id' => factory(Product::class),
        'currency' => config('currency.default'),
        'amount' => $faker->numberBetween(25, 2500)
    ];
});
