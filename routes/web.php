<?php

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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('about', [WebController::class, 'about'])->name('about');
Route::get('contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('services', [WebController::class, 'service'])->name('service');
Route::get('search', [WebController::class, 'search'])->name('search');

