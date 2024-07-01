<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/book meeting', function () {
    return view('booking');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});