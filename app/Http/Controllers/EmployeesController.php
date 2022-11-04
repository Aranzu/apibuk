<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajador = Employees::all();
        return $trabajador;
    }

    public function idEmp($id)
    {
        return Employees::findOrFail($id);        
    }

}
