<?php

namespace Database\Seeders;

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
        //has to run in the order of the migrations

        \App\Models\User::factory(10)->create();
        $this->call(
            ContactSeeder::class,
            StoreTypeSeeder::class,
        );
        \App\Models\Store::factory(6)->create();
        $this->call(
            BannerSeeder::class,
            CartSeeder::class,
            CategoryTypeSeeder::class,
        );
        \App\Models\Category::factory(10)->create();
    }
}
