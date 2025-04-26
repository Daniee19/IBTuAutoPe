<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //Corregir (cambiar) para evitar llamar al fragmento layout.navbar
    // return view('layout.navbar');
    return view('advantages.advantages');
});
