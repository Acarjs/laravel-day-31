<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\VideogameController;

// use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    //resources/view/welcome.blade.php
    return view('welcome');
});

//when the user comes with the GET request method to the URL /awards handle the request by the App\Http\Controllers\AwardController controller and its index method
Route::get('/awards',[AwardController::class,'index']);

Route::get('/index',[IndexController::class,'index']);
//index is the method inside of controller
// /index is the routing page : i.e. laravel.test/index

Route::get('/top-rated-movies',[MovieController::class,'topRated']);


Route::get('/top-rated-games',[VideogameController::class,'topRated']);

Route::get('/movies/shawshank-redemption',[MovieController::class,'shawshank']);

Route::get('/search',[MovieController::class,'search']);

// Route::get('/search', [MovieController::class, 'search'])->name('movies.search');