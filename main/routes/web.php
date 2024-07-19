<?php

use App\Models\Heurs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;




/* ------------------------------------------------------- */
/*                       Booking                           */
/* ------------------------------------------------------- */
    Route::post('/Booking', [BookingController::class, 'store'])->name('Booking');
    Route::get('/book meeting', [BookingController::class, 'index'])->name('booking_now');
    Route::get('/available-dates', [BookingController::class, 'getAvailableDates']);


/* ------------------------------------------------------- */
/*                       Dashboard                         */
/* ------------------------------------------------------- */
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/content_messaging', [DashboardController::class, 'send_message'])->name('message');
    Route::post('/valid', [DashboardController::class, 'valid'])->name('valid');
    Route::post('/invalid', [DashboardController::class, 'invalid'])->name('invalid');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

/* ------------------------------------------------------- */
/*                       Authentification                  */
/* ------------------------------------------------------- */
Route::middleware('guest')->group(function(){
    Route::post('/register_callback', [AuthController::class, 'register'])->name('register_callback');
    Route::post('/login_callback', [AuthController::class, 'store'])->name('login_callback');
    Route::get('/login', [AuthController::class, 'index'])->name('login');

    Route::get('/', function () {
        return view('home');
    })->name('home')->middleware('track_visits'); 

    Route::get('/A propos de nous', function () { 
        return view('Apropos');
    })->name('propos');

    Route::get('/Notre vision', function () {
        return view('vision');
    })->name('vision');

    Route::get('/PMO', function () {
        return view('1PMO');
    })->name('PMO');
    
    Route::get('/DIGITAL', function () {
        return view('2DIGITAL');
    })->name('DIGITAL');
    
    Route::get('/FORMATION', function () {
        return view('3FORMATION');
    })->name('FORMATION');
       
});


/* ------------------------------------------------------- */
/*                       Contact                           */
/* ------------------------------------------------------- */

Route::post('contact_callback', [ContactController::class, 'store'])->name('contact_callback');