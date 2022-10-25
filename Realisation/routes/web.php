<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PromotionController;
use  App\Http\Controllers\ApprenantController;
use  App\Http\Controllers\SearchController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('promotions',PromotionController::class);
Route::get('search',[PromotionController::class,'search']);
Route::resource('apprenants',ApprenantController::class);
Route::get('apprenants/create/{id}',[ApprenantController::class,'create'])->name('apprenants.create');




