<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacaciones extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'segundoApellido','rut', 'diasHabiles', 'tipo','inicio', 'termino', 'estado','cargo', 'division', 'departamento', 'area'];
    public $table = "vacaciones";
}
