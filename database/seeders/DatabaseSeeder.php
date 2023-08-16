<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Page;
use App\Models\Attribut;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $config = Page::create([
//            'page_title' => 'config'
//        ]);
//
//        Attribut::create([
//            'title' => 'facebook',
//            'page_id' => $config->id,
//            'is_image' => 0,
//            'content' => 'https://www.facebook.com',
//
//        ]);
//        Attribut::create([
//            'title' => 'youtube',
//            'page_id' => $config->id,
//            'is_image' => 0,
//            'content' => 'https://www.youtube.com',
//
//        ]);
//        Attribut::create([
//            'title' => 'instegram',
//            'page_id' => $config->id,
//            'is_image' => 0,
//            'content' => 'https://www.instagram.com',
//
//        ]);
//        Attribut::create([
//            'title' => 'linkedin',
//            'page_id' => $config->id,
//            'is_image' => 0,
//            'content' => 'https://www.linkedinin.com',
//
//        ]);
//        Attribut::create([
//            'title' => 'whatsapp',
//            'page_id' => $config->id,
//            'is_image' => 0,
//            'content' => 'https://www.google.com/',
//
//        ]);
//        Attribut::create([
//            'title' => 'location',
//            'page_id' => $config->id,
//            'is_image' => 0,
//            'content' => 'https://www.google.com/',
//
//        ]);

//        User::create([
//            'name' => 'islam',
//            'email' => 'm.reda@capitallords.com',
//            'password' => bcrypt( 'Mreda@02104878')
//            ]
//        );
        $this->call([
            SEOMetaDataSeeder::class
        ]);
    }
}
