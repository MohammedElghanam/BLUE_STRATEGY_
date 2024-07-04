<?php

use App\Models\Heurs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\dashboardController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/book meeting', function () {
    $heurs = Heurs::all();
    return view('booking', compact('heurs'));
})->name('booking_now');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::post('/valid', [dashboardController::class, 'valid'])->name('valid');
Route::post('/invalid', [dashboardController::class, 'invalid'])->name('invalid');
Route::post('/content messageing', [dashboardController::class, 'send_message'])->name('message');
Route::post('/Booking', [BookingController::class, 'store'])->name('Booking');