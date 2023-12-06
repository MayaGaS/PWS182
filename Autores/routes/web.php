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

Route::controller(formController::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::post('/guardarRegistro','metodoguardarRegistro')->name('apodoguardarRegistro');
});

