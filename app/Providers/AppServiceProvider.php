<?php

namespace App\Providers;

use App\Models\Attribut;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = Page::where('page_title', 'config')->first();
        $phone_number = Attribut::where('title', 'contact_phone_2')->first();
        $data = $data->attributes;
        $sheared_data = array();
        foreach ($data as $item){
            $sheared_data += [
                $item->title => $item->content
            ];
        }
        $sheared_data += [
            'phone_number' => $phone_number->content
        ];
        View::share('config', $sheared_data);
        Schema::defaultStringLength(191);
    }
}
