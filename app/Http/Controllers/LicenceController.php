<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licence;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $licenciaPermiso = Licence::all();
        return $licenciaPermiso;
    }

    public function idLic($id)
    {
        return Licence::findOrFail($id);
    }
}
