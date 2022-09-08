<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenciaPermiso extends Model
{
    use HasFactory;
    protected $fillable = ['empleado', 'rut', 'empNombreCompleto','asistenciaTipo', 'asistenciaNombreTipo', 'asistenciaFechaInicio','asistenciaFechaTermino', 'asistenciaDias', 'tomados'];
    public $table = "licencia_permiso";         
}
