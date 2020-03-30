<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seller;
use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'avatars'=> $faker->name(),
        'name'=> $faker->name(),
        'location'=> $faker->name(),
        'state'=> $faker->name(),
        'municipality'=> $faker->name(),
        'street'=> $faker->name(),
        'interior_number'=> $faker->name(),
        'exterior_number'=> $faker->name(),
        'postal_code'=> $faker->name(),
        'monday'=> $faker->name(),
        'tuesday'=> $faker->name(),
        'wednesday'=> $faker->name(),
        'thursday'=> $faker->name(),
        'friday'=> $faker->name(),
        'saturday'=> $faker->name(),
        'sunday'=> $faker->name(),
        'seller_id'=> Seller::all()->random()->id,
        //'verified_at'=> '1'
    ];
});
