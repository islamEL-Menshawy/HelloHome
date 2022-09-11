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
        $this->call([
//            ImageSeeder::class,
//            CompoundSeeder::class,
//            LocationSeeder::class,
//            TypeSeeder::class,
//            AmenitiesSeeder::class
            PageSeeder::class
        ]);
    }
}
