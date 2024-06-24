<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParameterModel extends Model
{
    use HasFactory;
    protected $table = 'app_parameter_models';
    protected $fillable = [
        'user_id',
        'parameter',
        'description',
    ];
}
