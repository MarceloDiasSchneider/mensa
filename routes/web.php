<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuCompositionController;
use Illuminate\Support\Facades\Route;

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

Route::controller(DashboardController::class)->prefix('/dashboard')->group(function () {
    Route::get('/auth', 'auth')->name('dashboard.auth');
    Route::get('/calendario', 'calendar')->name('dashboard.calendar');
    Route::get('/piatti', 'dishes')->name('dashboard.dishes');
});
Route::controller(MenuCompositionController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/links', 'links')->name('links');
    Route::get('/componi-menu', 'menu_composition')->name('menu_composition');
});
