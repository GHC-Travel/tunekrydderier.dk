<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\ProductCategory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->bs,
        'category_id' => factory(ProductCategory::class),
        'photo_url' => $faker->imageUrl(),
        'stock' => $faker->numberBetween(0, 100),
    ];
});