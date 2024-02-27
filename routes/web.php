<?php

use App\Http\Controllers\TipoAsientoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsiento;
use App\Http\Controllers\VuelosController;

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

Route::get('/', function () {
    return view('inicio');
});
//Asientos
route::get('/TipoAsiento', [TipoAsientoController::class,'index'])->name('TipoAsiento.inicio');
route::get('/TipoAsiento/crear', [TipoAsientoController::class,'create'])->name('Asientos.crear');
route::get('/TipoAsiento/store', [TipoAsientoController::class,'store'])->name('TipoAsiento.store');

route::get('/Vuelos', [VuelosController::class,'index'])->name('Vuelos.inicio');
route::get('/Vuelos/crear', [VuelosController::class,'create'])->name('Vuelos.crear');
route::post('/Vuelos/store', [VuelosController::class,'store'])->name('Vuelos.store');
route::get('/Vuelos/editar', [VuelosController::class,'edit'])->name('Vuelos.editar');