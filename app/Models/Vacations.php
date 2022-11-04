<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacations extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'working_days', 'start_date','end_date', 'type', 'status'];
    public $table = "vacations";
    protected $primaryKey = 'id';
}
