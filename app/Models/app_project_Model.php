<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_project_Model extends Model
{
    use HasFactory;
    protected $fillable = [
<<<<<<< HEAD:app/Models/app_project_Model.php
        'id',
        'project_name',
=======
        'user_id',
        'style',
        'img',
>>>>>>> 962bddc8b56f5419f3e1859d1848583d87f835bb:app/Models/StyleModel.php
        'description',

    ];
}
