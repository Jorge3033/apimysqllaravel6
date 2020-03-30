<?php

use Illuminate\Database\Seeder;

class StoreCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StoreComment::class,20)->create();
    }
}
