<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LicenciaPermiso;

class LicenciaPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $licenciaPermiso = LicenciaPermiso::all();
        return $licenciaPermiso;
    }

    public function consRutlic($rut)
    {
        return LicenciaPermiso::findOrFail($rut);
    }
}
