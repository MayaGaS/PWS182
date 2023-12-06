<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formValid; //obligatorio

class formController extends Controller
{
    public function form(){
        return view('form');
    }

    public function metodoGuardar(formValid $req){
        return redirect('/')->with('confirmacion','Comic Guardado!!!');
    }
}
