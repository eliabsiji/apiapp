<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_style_Model extends Model
{
    use HasFactory;
    protected $table = 'app_style_models';
    protected $fillable = [
        'user_id',
        'style',
        'img',
        'description',
    ];
}
