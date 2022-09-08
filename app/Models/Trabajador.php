<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $fillable = ['empleado', 'empleadoRut', 'nombreCompleto','TrabajoCargo', 'TrabajoFamiliaCargo', 'departamento','centroCosto', 'lmyPermisos', 'vac'];
    public $table = "trabajador";    
}
