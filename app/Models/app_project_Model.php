<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_project_Model extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'project_name',
        'description',

    ];
}
