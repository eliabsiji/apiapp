<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleparameterModel extends Model
{
    use HasFactory;
    protected $table = 'app_styleparameter_models';
    protected $fillable = [
        'user_id',
        'parameterid',
        'styleid',
        'description',
    ];
}
