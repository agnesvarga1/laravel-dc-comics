<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ComicController;
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
    return view('pages.home');
})->name("homePage");

Route::resource("comics",ComicController::class);

Route::get('/characters', function () {
    return view('pages.games');
})->name("CharactersPage");
