<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = ['person_id', 'first_name', 'surname','second_surname', 'full_name', 'rut','nationality', 'email', 'current_job'];
    public $table = "employees";
    protected $primaryKey = 'id';  
}