<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacations;

class VacationsController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $vacaciones = Vacations::all();
        return $vacaciones;
    }
    public function idVac($rut)
    {
        return Vacations::findOrFail($rut);
    }


}
