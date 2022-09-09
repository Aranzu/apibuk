<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacaciones;

class VacacionesController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $vacaciones = Vacaciones::all();
        return $vacaciones;
    }
    public function consRutVac($rut)
    {
        return Vacaciones::findOrFail($rut);
    }


}
