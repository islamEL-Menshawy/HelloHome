<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title_en'=>"El Sheikh Zayed",
                'slug_en'=> Str::slug("El Sheikh Zayed")
            ],[
                'title_en'=>"New Capital",
                'slug_en'=> Str::slug("New Capital")
            ],[
                'title_en'=>"Nasr City",
                'slug_en'=> Str::slug("Nasr City")
            ],[
                'title_en'=>"New Cairo",
                'slug_en'=> Str::slug("New Cairo")
            ]
        ];

        foreach ($data as $item){
            Location::create($item);
        }

    }
}
