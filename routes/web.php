<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodAdminController;
use App\Http\Controllers\DrinkAdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PagesController;


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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/menu', 'App\Http\Controllers\MenuController@index');
Route::get('/menu/create', 'App\Http\Controllers\MenuController@create');
Route::post('/menu', 'App\Http\Controllers\MenuController@store');



// Controller Makanan
Route::get('admin', [FoodAdminController::class, 'index']);
Route::get('addfood', [FoodAdminController::class, 'create']);
Route::post('addfood', [FoodAdminController::class, 'store']);

// Controller Minuman
Route::get('admin', [DrinkAdminController::class, 'index']);
Route::get('adddrink', [DrinkAdminController::class, 'create']);
Route::post('adddrink', [DrinkAdminController::class, 'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
