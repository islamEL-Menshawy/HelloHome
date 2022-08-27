<?php

namespace Database\Seeders;

use App\Models\Compound;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompoundSeeder extends Seeder
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
                'title_en' => "Mivida",
                'slug_en'=>Str::slug("Mivida"),
                'description_en'=> "Mivida New Cairo is one of Emmar’s projects in Egypt, an A-class residence where you’ll experience the luxurious life. "
            ],
            [
                'title_en' => "Hyde Park",
                'slug_en'=>Str::slug("Hyde Park"),
                'description_en'=> "Hyde Park New Cairo is considered one of the top 10 compounds in New Cairo. It includes everything that makes your residency perfect. "
            ],
            [
                'title_en' => "Mountain View",
                'slug_en'=>Str::slug("Mountain View"),
                'description_en'=> "Mountain View Hyde Park is the perfect community for you and your family, where you will enjoy the largest landscape with privacy. In addition, it has all the services that you might need. "
            ],
            [
                'title_en' => "Eastown",
                'slug_en'=>Str::slug("Eastown"),
                'description_en'=> "Eastown is one of Sodic’s iconic projects. It’s a community where everything to make you comfortable is available."
            ],
            [
                'title_en' => "Katameya Dunes New Cairo",
                'slug_en'=>Str::slug("Katameya Dunes New Cairo"),
                'description_en'=> "Katameya Dunes New Cairo is one of the top compounds in New Cairo. It’s supported with all the facilities and services to make your residency a good one. "
            ],
            [
                'title_en' => "Katameya Gardens",
                'slug_en'=>Str::slug("Katameya Gardens"),
                'description_en'=> "A beautiful landscape and perfect unit design are what you’ll have at Katameya Gardens New Cairo. It’s designed with high standards to match your needs. "
            ],

        ];

        foreach ($data as $item){
            Compound::create($item);
        }
    }
}
