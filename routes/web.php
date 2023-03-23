<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
ini_set('memory_limit', -1);
Route::get('/', function () {
    return view('welcome');
});

// Route::namespace('App\Http\Controllers')->group(function () {
//     Auth::routes();
// });

//Route::get('/login', 'LoginController@showLoginForm')->name('login');
//Route::get('/login', ' App\Http\Controllers\LoginController@showLoginForm');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login',  [LoginController::class,'login'])->name('login');
// Route::post('/logout', 'LoginController@logout')->name('logout');

// Route::get('/post', 'PostController@index');