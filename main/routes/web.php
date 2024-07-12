<?php

use App\Models\Heurs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\dashboardController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/A propos de nous', function () {
    return view('Apropos');
})->name('propos');

Route::get('/Notre vision', function () {
    return view('vision');
})->name('vision');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/register_callback', [AuthController::class, 'register'])->name('register_callback');

Route::post('/login_callback', [AuthController::class, 'store'])->name('login_callback');


Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::post('/valid', [dashboardController::class, 'valid'])->name('valid');
Route::post('/invalid', [dashboardController::class, 'invalid'])->name('invalid');
Route::post('/content messageing', [dashboardController::class, 'send_message'])->name('message');
Route::post('/Booking', [BookingController::class, 'store'])->name('Booking');
Route::get('/book meeting', [BookingController::class, 'index'])->name('booking_now');

Route::get('/available-dates', [BookingController::class, 'getAvailableDates']);

