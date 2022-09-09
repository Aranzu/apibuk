<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajador = Trabajador::all();
        return $trabajador;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajador = new Trabajador();
        $trabajador -> nombre = $request ->nombre;
        $trabajador -> rut = $request ->rut;
        $trabajador -> cargo = $request ->cargo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trabajador = Trabajador::findOrFail($request->id);
        $trabajador -> nombre = $request ->nombre;
        $trabajador -> rut = $request ->rut;
        $trabajador -> cargo = $request ->cargo;

        $trabajador -> save();

        return $trabajador;
    }

    public function consultaIndividual($id)
    {
        $trabajador = Trabajador::findOrFail($id);  
        return $trabajador;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $trabajador = Trabajador::destroy($request->id);
        return $trabajador;
    }
}
