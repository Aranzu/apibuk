<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;
    protected $fillable = ['licence_type_id', 'contribution_days', 'format','type', 'medic_rut', 'start_date','end_date', 'days_count','day_percent','employee_id'];
    public $table = "licence";
    protected $primaryKey = 'id';  
    
}
