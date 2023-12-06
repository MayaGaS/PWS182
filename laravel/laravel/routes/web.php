<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCRUDD;

// RUTAS ControllerCRUDD
Route::get('/recuerdo/create', [ControllerCRUDD::class, 'create'])->name('recuerdo.create');

Route::post('/recuerdo', [ControllerCRUDD::class, 'store'])->name('recuerdo.store');
Route::get('/recuerdo', [ControllerCRUDD::class, 'index'])->name('recuerdo.index');

Route::post('/recuerdo/{id}/confirm', [ControllerCRUDD::class, 'update'])->name('recuerdo.update');

Route::delete('/recuerdo/{id}/delete', [ControllerCRUDD::class, 'destroy'])->name('recuerdo.delete');


// RUTAS INDIVIDUALES PARA CONTROLADOR

Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');
// Route::get('/formulario', [diarioController::class, 'metodoFormulario'])->name('apodoFormulario');
// Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos'])->name('apodoRecuerdos');

// Route::post('/guardarRecuerdo', [diarioController::class, 'metodoGuardar'])->name('guardar');




/*
Route::controller(diarioController::class)-> group(function(){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formulario', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos', 'metodoRecuerdos')->name('apodoRecuerdos');
});



|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/* Route::get('/', function () {
    return view('welcome');
}); 

Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/formulario', 'formulario')->name('apodoFormulario');
Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdo'); */


