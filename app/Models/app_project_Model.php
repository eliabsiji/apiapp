<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_project_Model extends Model
{
    use HasFactory;

    protected $table = 'app_project_models';
    protected $fillable = [
        'id',
        'user_id',
        'projectname',
        'description',
        'deadline',

    ];
}
