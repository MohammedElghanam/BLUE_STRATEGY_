<?php

use App\Models\Heurs;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboardController;
use App\Models\User;

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
    Route::delete('/ref/{id}', [DashboardController::class, 'destroy'])->name('destroy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

/* ------------------------------------------------------- */
/*                       Authentification                  */
/* ------------------------------------------------------- */
Route::middleware('guest')->group(function(){
    Route::post('/register_callback', [AuthController::class, 'register'])->name('register_callback');
    Route::post('/login_callback', [AuthController::class, 'store'])->name('login_callback');

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::get('/J77xW00TWK8U4j0d0AffwE77xbLkgjggxjRwE77xW00TpT5c59R', [AuthController::class, 'create'])->name('register');
    
    Route::get('/', function () {
        $images = Image::all();
        return view('home', compact('images'));
    })->name('home')->middleware('track_visits'); 

    Route::get('/A propos de nous', function () { 
        return view('Apropos');
    })->name('propos');

    Route::get('/Notre vision', function () {
        return view('vision');
    })->name('vision');

    Route::get('/Notre Equipe', function () {
        return view('equipe');
    })->name('equipe');

    Route::get('/PMO', function () {
        return view('1PMO');
    })->name('PMO');
    
    Route::get('/DIGITAL', function () {
        return view('2DIGITAL');
    })->name('DIGITAL');
    
    Route::get('/FORMATION', function () {
        return view('3FORMATION');
    })->name('FORMATION');

    Route::get('/RH', function () {
        return view('4RH');
    })->name('RH');
   
    Route::get('/TPE', function () {
        return view('5TPE');
    })->name('TPE');

    Route::get('/DESS', function () {
        return view('6DESS');
    })->name('DESS');

    Route::get('/ENTREPREUNARIAT', function () {
        return view('1ENTREPREUNARIAT');
    })->name('ENTREPREUNARIAT');

    Route::get('/PROJETS_DESS', function () {
        return view('1PROJETS_DESS');
    })->name('PROJETS_DESS');

});


/* ------------------------------------------------------- */
/*                       Contact                           */
/* ------------------------------------------------------- */

Route::post('contact_callback', [ContactController::class, 'store'])->name('contact_callback');


Route::post('ref', [dashboardController::class, 'store'])->name('ref');

