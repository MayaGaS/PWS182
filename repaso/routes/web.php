<?php

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

use App\Http\Controllers\libController;

Route::get('/',[libController::class,'metodoWelcome'] )->name('Welcome');

Route::get('/registro',[libController::class,'metodoRegistro'] )->name('Registro');

Route::post('/guardarRegistro',[libController::class,'metodoGuardar'] )->name('Guardar');   