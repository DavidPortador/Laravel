<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'raiz'])->name('/');

Route::get('/registro', [Controller::class, 'tipo'])->name('tipo');
Route::get('/registro/{tipo}', [Controller::class, 'registro'])->name('registro');