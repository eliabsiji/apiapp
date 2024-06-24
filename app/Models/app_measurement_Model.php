<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_measurement_Model extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'style_parameter_id',
        'measurement',
        
    ];
}
