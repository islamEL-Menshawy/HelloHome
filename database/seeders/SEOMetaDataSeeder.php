<?php

namespace Database\Seeders;

use App\Models\Attribut;
use App\Models\Compound;
use App\Models\News;
use App\Models\Page;
use App\Models\SEO;
use App\Models\Unites;
use Illuminate\Database\Seeder;

class SEOMetaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SEO::query()->create(
            [
            "page_id" => 1,
            "keywords_en" => "",
            "keywords_ar" => "",
            "description_en" => "",
            "description_ar" => "",
            "page_type" => "",
            "robots" => "",
            ]
        );
        SEO::query()->create(
            [
                "page_id" => 2,
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        SEO::query()->create(
            [
                "page_id" => 3,
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        SEO::query()->create(
            [
                "page_id" => 4,
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        $explore_homes = Page::query()->create([
            "page_title" => "explore-homes"
        ]);
        SEO::query()->create(
            [
                "page_id" => $explore_homes['id'],
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        $compounds = Compound::query()->pluck("id")->toArray();
        foreach ($compounds as $compound){
            SEO::query()->create(
            [
                "compound_id" => $compound,
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        }
        $units = Unites::query()->pluck("id")->toArray();
        foreach ($units as $unit){
            SEO::query()->create(
                [
                    "unit_id" => $unit,
                    "keywords_en" => "",
                    "keywords_ar" => "",
                    "description_en" => "",
                    "description_ar" => "",
                    "page_type" => "",
                    "robots" => "",
                ]
            );
        }
        $search = Page::query()->create([
            "page_title" => "search"
        ]);

        SEO::query()->create(
            [
                "page_id" => $search['id'],
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        $news = Page::query()->create([
            "page_title" => "news"
        ]);
        SEO::query()->create(
            [
                "page_id" => $news['id'],
                "keywords_en" => "",
                "keywords_ar" => "",
                "description_en" => "",
                "description_ar" => "",
                "page_type" => "",
                "robots" => "",
            ]
        );
        $news_items = News::query()->pluck("id")->toArray();
        foreach ($news_items as $new){
            SEO::query()->create(
                [
                    "new_id" => $new,
                    "keywords_en" => "",
                    "keywords_ar" => "",
                    "description_en" => "",
                    "description_ar" => "",
                    "page_type" => "",
                    "robots" => "",
                ]
            );
        }

        Attribut::query()->create([
           'page_id' => 1,
           'title' => "section_one_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 1,
            'title' => "section_one_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 1,
            'title' => "section_two_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 1,
            'title' => "section_two_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 1,
            'title' => "section_three_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 1,
            'title' => "section_three_image_alter_ar"
        ]);

        Attribut::query()->create([
            'page_id' => 2,
            'title' => "about_section_main_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "about_section_main_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "about_section_3_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "about_section_3_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "about_section_5_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "about_section_5_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "section_6_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 2,
            'title' => "section_6_image_alter_ar"
        ]);

        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_main_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_main_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "section_4_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "section_4_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_6_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_6_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_9_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_9_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_14_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_14_image_alter_ar"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_15_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 3,
            'title' => "service_section_15_image_alter_ar"
        ]);

        Attribut::query()->create([
            'page_id' => 4,
            'title' => "main_image_alter_en"
        ]);
        Attribut::query()->create([
            'page_id' => 4,
            'title' => "main_image_alter_ar"
        ]);
    }
}
