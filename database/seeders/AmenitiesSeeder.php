<?php

namespace Database\Seeders;

use App\Models\Amenitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AmenitiesSeeder extends Seeder
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
                'title_en' => "Wifi",
                'slug_en' => Str::slug('Wifi')
            ],[
                'title_en' => "Lake View",
                'slug_en' => Str::slug('Lake View')
            ],[
                'title_en' => "Security",
                'slug_en' => Str::slug('Security')
            ],[
                'title_en' => "TV with standard cable",
                'slug_en' => Str::slug('TV with standard cable')
            ],[
                'title_en' => "Kitchen",
                'slug_en' => Str::slug('Kitchen')
            ],[
                'title_en' => "TV with standard",
                'slug_en' => Str::slug('TV with standard')
            ],[
                'title_en' => "Security cameras",
                'slug_en' => Str::slug('Security cameras')
            ],[
                'title_en' => "Air conditioning",
                'slug_en' => Str::slug('Air conditioning')
            ]
        ];

        foreach ($data as $item){
            Amenitie::create($item);
        }
    }
}
