<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuario', UsuarioController::class);

Route::resource('carrito', CarritoController::class);

Route::resource('categoria', CategoriaController::class);

Route::resource('curso', CursoController::class);

Route::resource('seccion', SeccionController::class);

Route::resource('venta', VentaController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
