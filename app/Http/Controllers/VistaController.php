<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function vehiculo()
    {
        return view('vehiculo_seleccionado');
    }

    public function blog()
    {
        return view('blog');
    }
}
