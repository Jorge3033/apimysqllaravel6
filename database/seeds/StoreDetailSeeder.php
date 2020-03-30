<?php

use Illuminate\Database\Seeder;

class StoreDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StoreDetail::class,20)->create();
    }
}
