<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TypeController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\CompoundController;
use App\Http\Controllers\API\AmenitiesController;
use App\Http\Controllers\API\UnitsController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get("test", function (){
        return "test";
    });
});

Route::apiResource('type', TypeController::class);
Route::apiResource('location', LocationController::class);
Route::apiResource('compound', CompoundController::class);
Route::post('compound/update-image/{id}', [CompoundController::class, 'updateImage']);
Route::apiResource('amenities', AmenitiesController::class);
Route::post('amenities/update-image/{id}', [AmenitiesController::class, 'updateImage']);
Route::apiResource('unit', UnitsController::class);
