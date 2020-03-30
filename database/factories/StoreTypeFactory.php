<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StoreType;
use Faker\Generator as Faker;

$factory->define(StoreType::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
      'description'=> $faker->text(50)
    ];
});
