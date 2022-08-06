<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
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
                'title_en'=>"Apartment",
                'slug_en'=> Str::slug("Apartment")
            ],[
                'title_en'=>"Villa",
                'slug_en'=> Str::slug("")
            ],[
                'title_en'=>"Studio",
                'slug_en'=> Str::slug("Studio")
            ],[
                'title_en'=>"Twin House",
                'slug_en'=> Str::slug("Twin House")
            ]
        ];

        foreach ($data as $item){
            Type::create($item);
        }
    }
}
