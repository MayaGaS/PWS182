<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
public function metodoInicio(){
    return view('welcome');
    }
    public function metodoguardarRegistro(Request $request)
    {
        $request->validate([
            'Nombre'=>'required|min:4',
            'fecha'=>'required',
            'Libros' =>'required|numeric|digits_between:1,4', 
        ]);
        return redirect('/')->with('success', 'Fue guardado con exito');

    }
}