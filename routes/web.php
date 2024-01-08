<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('home');
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/pages1', [PageController::class, 'pages1']);
Route::get('/pages2', [PageController::class, 'pages2']);
Route::get('/pages3', [PageController::class, 'pages3']);
Route::get('/pages4', [PageController::class, 'pages4']);

// Route::get('/halaman', 'ContohController@halaman')->name('halaman');