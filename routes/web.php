<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [ProductoController::class, 'index']);



Route::resource('productos', ProductoController::class);

Route::get('productos/informe/pdf',[ProductoController::class, 'generarInformePDF'])->name('productos.informe.pdf');
