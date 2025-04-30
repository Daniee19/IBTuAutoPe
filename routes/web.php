<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/advantages', function () {
    return view('advantages.advantages');
})->name('advantages');

Route::get('/about', function () {
    return view('about.about');
})->name('about');
