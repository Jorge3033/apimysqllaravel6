<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seller;
use App\User;
use Faker\Generator as Faker;

$factory->define(Seller::class, function (Faker $faker) {
    return [
        'name'=> $faker->name(),
        'last_name'=> $faker->name(),
        'phone' => $faker->phoneNumber,
        'photo' => 'nophoto.jpg',
        'status'=> 'active',
        //'verified_at'=> '1',
        'user_id'=> User::all()->random()->id
    ];
});
