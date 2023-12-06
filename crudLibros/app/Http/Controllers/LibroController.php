<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks = libro::all();
        return view('libros.index', compact('allbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo = $request->txtTit;
        $addLibro->autor = $request->txtAut;
        $addLibro->paginas = $request->txtPag;
        $addLibro->anio = $request->txtAn;
        $addLibro->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uptLibro= libro::find($id);
        $uptLibro->titulo = $request->txtTit;
        $uptLibro->autor = $request->txtAut;
        $uptLibro->paginas = $request->txtPag;
        $uptLibro->anio = $request->txtAn;
        $uptLibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro= libro::find($id);
        $deslibro->delete();
        return reduirect()->back();
    }
}
