<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormLib; 

class libController extends Controller
{
    //
    public function metodoWelcome(){
        return view('inicio');

    }
    
    public function metodoRegistro(){
        return view('registro');
        
    }

    public function metodoGuardar(validadorFormLib $req){


        return redirect('/registro')->with ('confirmacion', 'Libro Registrado Correctamente');
    }   
}
