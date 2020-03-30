<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use App\StoreComment;
use App\User;
use Faker\Generator as Faker;

$factory->define(StoreComment::class, function (Faker $faker) {
    return [
        'store_id'=> Store::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'comment' => $faker->text(100),
        'stars'=> $faker->numberBetween(1,5)
    ];
});
