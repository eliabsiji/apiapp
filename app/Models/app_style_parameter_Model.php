<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_style_parameter_Model extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'user_id',
        'style_id',
        'parameter_id',

    ];
}