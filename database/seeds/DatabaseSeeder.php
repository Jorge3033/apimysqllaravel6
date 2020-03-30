<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StoreTypeSeeder::class);
        $this->call(StoreServiceSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(PayModeSeeder::class);
        $this->call(StoreCommentSeeder::class);
        $this->call(StoreDetailSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(ProductDetailSeeder::class);
    }
}
