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
                'slug_en' => Str::slug('Wifi'),
                'image_id'=> 1
            ],[
                'title_en' => "Lake View",
                'slug_en' => Str::slug('Lake View'),
                'image_id'=> 1
            ],[
                'title_en' => "Security",
                'slug_en' => Str::slug('Security'),
                'image_id'=> 1
            ],[
                'title_en' => "TV with standard cable",
                'slug_en' => Str::slug('TV with standard cable'),
                'image_id'=> 1
            ],[
                'title_en' => "Kitchen",
                'slug_en' => Str::slug('Kitchen'),
                'image_id'=> 1
            ],[
                'title_en' => "TV with standard",
                'slug_en' => Str::slug('TV with standard'),
                'image_id'=> 1
            ],[
                'title_en' => "Security cameras",
                'slug_en' => Str::slug('Security cameras'),
                'image_id'=> 1
            ],[
                'title_en' => "Air conditioning",
                'slug_en' => Str::slug('Air conditioning'),
                'image_id'=> 1
            ],[
                'title_en' => "Security cameras",
                'slug_en' => Str::slug('Security cameras'),
                'image_id'=> 1
            ]
        ];

        foreach ($data as $item){
            Amenitie::create($item);
        }
    }
}
