<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController; 
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductoController::class, 'inicio'])->name('productos.inicio');


Route::get('trensuperior', [ProductoController::class, 'trensuperior']);
Route::get('treninferior', [ProductoController::class, 'treninferior']);
Route::get('cuerpocompleto', [ProductoController::class, 'cuerpocompleto']);
Route::get('accesorios', [ProductoController::class, 'accesorios']);
Route::get('cabeza', [ProductoController::class, 'cabeza']);

Route::get('anadircarrito', [ProductoController::class, 'anadircarrito']);

Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
Route::post('productos', [ProductoController::class, 'store']);
Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

Route::post('iniciosesion', [UsuarioController::class, 'validar']);
Route::get('iniciosesion', [UsuarioController::class, 'iniciosesion']);
Route::get('logout',[UsuarioController::class, 'logout']);

Route::post('/carrito/agregar/{producto}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::post('/carrito/eliminar/{producto}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::post('/carrito/actualizar/{producto}', [CarritoController::class, 'actualizar'])->name('carrito.actualizar');
Route::get('/carrito', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
Route::post('/carrito/limpiar', [CarritoController::class, 'limpiar'])->name('carrito.limpiar');

