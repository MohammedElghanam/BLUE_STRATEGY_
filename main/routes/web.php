<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/book meeting', function () {
    return view('booking');
})->name('booking_now');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/valid_tag/{id}', [dashboardController::class, 'valid'])->name('valid');
Route::get('/invalid_tag/{id}', [dashboardController::class, 'invalid'])->name('invalid');
    
Route::post('/Booking', [BookingController::class, 'store'])->name('Booking');