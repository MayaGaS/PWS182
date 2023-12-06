<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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

Route::get('/', [formController::class,'form'])->name('Guardar'); //muestra la vista del form 

Route::post('/guardarComic', [formController::class, 'metodoGuardar'])->name('guardar'); //accion de guardar

