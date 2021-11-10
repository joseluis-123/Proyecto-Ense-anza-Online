<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\VentaDetalleController;
use App\Http\Controllers\Web\PageController;
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

Auth::routes();

Route::prefix('admin')->middleware('auth')->group( function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('usuario', UsuarioController::class);

    Route::resource('carrito', CarritoController::class);

    Route::resource('categoria', CategoriaController::class);

    Route::resource('curso', CursoController::class);

    Route::resource('seccion', SeccionController::class);

    Route::resource('venta', VentaController::class);

    Route::get('mis-alumnos', [VentaDetalleController::class, 'misAlumnos'])->name('venta.detalle.misAlumnos');

});

Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/curso/{id}/detalle', [PageController::class, 'curso_detalle'])->name('curso.detalle');

Route::get('/anadir-carrito', [CarritoController::class, 'anadirCarrito']);
Route::get('/eliminar-carrito', [CarritoController::class, 'eliminarCarrito']);


