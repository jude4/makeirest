<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\OccupationController;
use App\Http\Controllers\Api\UpdateAccountController;
use App\Http\Controllers\Api\User\AddressController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'users'], function() {
    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/login', [AuthController::class, 'login']); 

});

Route::group(['prefix' => 'artisans'], function () {
    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/login', [AuthController::class, 'login']);

    
});


// USERS ROUTES
Route::group(['prefix' => 'users', 'middleware' => 'auth:sanctum'], function() {
    Route::resource('address', 'App\Http\Controllers\Api\User\AddressController');
    Route::get('getUser', [AuthController::class, 'getUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('occupations', 'App\Http\Controllers\Api\OccupationController');
    Route::get('search/artisan/{query}', [OccupationController::class, 'searchArtisanWithOccupaction']);
    Route::resource('artisan', 'App\Http\Controllers\Api\User\ArtisanController');
});

// ARTISANS ROUTES
Route::group(['prefix' => 'artisan', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/getUser', [AuthController::class, 'getUser']);
    Route::resource('update-profile', [UpdateAccountController::class]);
    Route::post('/logout', [AuthController::class, 'logout']);
});