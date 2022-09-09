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


    public function consRutTra($empleadoRut)
    {
        return Trabajador::findOrFail($empleadoRut)->get;        
    }

}
