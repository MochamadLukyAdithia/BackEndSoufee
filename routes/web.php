<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
})->name('landingpage');

Route::get('/homepage', function () {
    return view('pages.home.index');
})->name('homepage');