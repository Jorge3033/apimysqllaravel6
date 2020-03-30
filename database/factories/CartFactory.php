<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cart;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'product_id'=> Product::all()->random()->id,
        'user_id' => User::all()->random()->id,
    ];
});
