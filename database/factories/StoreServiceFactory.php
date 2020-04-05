<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StoreService;
use Faker\Generator as Faker;

$factory->define(StoreService::class, function (Faker $faker) {
    return [
      'name'=> $faker->name,
      'description'=> $faker->text(20)
    ];
});
