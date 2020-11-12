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
        for($i = 0; $i<20; $i++) {
            $this->call([
                PhoneNumSeeder::class,
                UserSeeder::class,
                ProductSeeder::class,
                CategorySeeder::class,
                ProductCategorySeeder::class
            ]);
        }
    }
}
