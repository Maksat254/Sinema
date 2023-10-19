<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-film', [\App\Http\Controllers\FilmController::class, 'getFilm'])->name('get-film');
Route::get('/booking', [\App\Http\Controllers\BookingController::class, 'getBooking'])->name('booking');
Route::get('/create', [\App\Http\Controllers\BookingController::class, 'create'])->name('create');
Route::post('/booking/create', [\App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');
Route::get('/get-login', function () {})->middleware('auth')->name('get-login');
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
