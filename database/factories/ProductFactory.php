<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'avatars' => 'avatar.jpg',
         'name' => $faker->name(),
         'price'=> $faker->numberBetween(1,1000),
         'marker'=> $faker->name(),
         'stock' => $faker->numberBetween(1,1000),
         'status' => 'active',
         'category_id' => Category::all()->random()->id
    ];
});
