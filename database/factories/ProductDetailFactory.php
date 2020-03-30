<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\ProductDetail;
use App\Store;
use Faker\Generator as Faker;

$factory->define(ProductDetail::class, function (Faker $faker) {
    return [
        'store_id' => Store::all()->random()->id,
        'product_id' => Product::all()->random()->id,
    ];
});
