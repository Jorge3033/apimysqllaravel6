<?php

use Illuminate\Database\Seeder;

class PayModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PayMode::class,20)->create();
    }
}
