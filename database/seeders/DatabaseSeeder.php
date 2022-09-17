<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'islam',
            'email' => 'm.reda@capitallords.com',
            'password' => bcrypt( 'Mreda@02104878')
            ]
        );
        $this->call([
//            ImageSeeder::class,
//            CompoundSeeder::class,
//            LocationSeeder::class,
//            TypeSeeder::class,
//            AmenitiesSeeder::class
//            PageSeeder::class


        ]);
    }
}
