<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\VentaVehiculoController;
use App\Http\Controllers\VistaController;
use Dotenv\Dotenv;
use App\Http\Controllers\CatalogoController;


// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Formularios
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
Route::post('/formventas', [VentaVehiculoController::class, 'procesar'])->name('formventas.procesar');
Route::get('/formventas', function () { return view('formventas');})->name('formventas.form');

// Autenticación
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Vistas generales
Route::get('/vehiculo_seleccionado', [VistaController::class, 'vehiculo'])->name('vehiculo');
Route::get('/blog', [VistaController::class, 'blog'])->name('blog');


