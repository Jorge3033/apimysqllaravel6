<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PayMode;
use App\Store;
use App\StoreDetail;
use App\StoreService;
use Faker\Generator as Faker;

$factory->define(StoreDetail::class, function (Faker $faker) {
    return [
        'store_id'=> Store::all()->random()->id,
        'store_services_id'=> StoreService::all()->random()->id,
        'pay_mode_id' => PayMode::all()->random()->id
    ];
});
