<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormularioDiario;
use DB; // para la base de datos
use Carbon\Carbon; // manejo de fechas


class ControllerCRUDD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaRecuerdos = DB::table('tb_recuerdos')->get();
        return view('recuerdos', compact('consultaRecuerdos')); //retornar el result set consulta   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormularioDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
            'titulo' => $request->txtTitulo,
            'recuerdo' => $request->txtRecuerdo,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        return redirect('/recuerdo/create')->with('confirmacion', 'Recuerdo Almacenado en la Base de Datos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormularioDiario $request, string $id)
    {
        DB::table('tb_recuerdos')->where ('id',$id)->update([
            'titulo' => $request->input('txtTitulo'),
            'recuerdo' => $request->input('txtRecuerdo'),
            'updated_at' => Carbon::now()
        ]);

        return redirect('/recuerdo')->with('confirmacion', 'Recuerdo Modificado en la BD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_recuerdos')->where ('id',$id)->delete();
        return redirect('/recuerdo')->with('confirmacion', 'Recuerdo Eliminado en la BD');
    }
}
