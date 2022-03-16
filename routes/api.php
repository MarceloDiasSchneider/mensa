<?php

use App\Http\Controllers\ApiResponseTest;
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

Route::controller(ApiResponseTest::class)->prefix('test')->group(function () {
    Route::post('login', 'login');
    Route::post('recovery', 'recovery');
    Route::post('sigin', 'sigin');
    Route::post('sidebar-links', 'sidebarLinks');

    Route::get('typologies', 'typologies');
    Route::get('intolerances', 'intolerances');
    Route::get('ingredients', 'ingredients');
    Route::get('dishes', 'dishes');
});
