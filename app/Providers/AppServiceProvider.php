<?php

namespace App\Providers;

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
        $data = $data->attributes;
        $sheared_data = array();
        foreach ($data as $item){
            $sheared_data += [
                $item->title => $item->content
            ];
        }
        View::share('config', $sheared_data);
        Schema::defaultStringLength(191);
    }
}
