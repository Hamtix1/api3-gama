<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/categoria/{id}', [ProductController::class, 'showCategoria'])->name('subCategoria');
Route::get('/producto/{id}/{idProducto}', [ProductController::class, 'showProducto'])->name('producto');
