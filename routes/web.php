<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return redirect("/en");
});
Route::group([
    'prefix' => '{locale?}/',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'locale'
], function() {
    Route::get('/', [WebController::class, 'index'])->name('home');
    Route::get('about', [WebController::class, 'about'])->name('about');
    Route::get('contact-us', [WebController::class, 'contactUs'])->name('contact-us');
    Route::get('services', [WebController::class, 'service'])->name('service');
    Route::get('search', [WebController::class, 'search'])->name('search');
    Route::get('explore-homes', [WebController::class, 'explore_homes'])->name('explore_homes');
    Route::get('explore-homes/{compound}', [WebController::class, 'compound'])->name('compound');
    Route::get('unit/{compound}/{unit_id}', [WebController::class, 'unit_details'])->name('unit_details');
    Route::get('/change-lang',function (Request $request)
    {
        if (app()->getLocale() === "ar"){
            return redirect(str_replace("/ar/", "/en/", url()->previous()));
        }else{
            return redirect(str_replace("/en/", "/ar/", url()->previous()));
        }
    })->name('change.lang');
});





