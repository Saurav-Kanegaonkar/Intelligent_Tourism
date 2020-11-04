<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);


Route::get('/about', [PagesController::class, 'about']);
Route::get('/trips', [PagesController::class, 'trips']);
Route::get('/fun', [PagesController::class, 'fun']);
Route::post('/result', [PagesController::class, 'trips_submit']);
// Route::get('/place/{place}', [PagesController::class, 'place_info']);
Route::get('/place/{place}', 'PagesController@place_info')->name('place_info');

Route::resource('posts','PostsController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gmaps', 'HomeController@gmaps');

