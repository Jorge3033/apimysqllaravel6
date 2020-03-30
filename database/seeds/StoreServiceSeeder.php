<?php

use Illuminate\Database\Seeder;

class StoreServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StoreService::class,20)->create();
    }
}
