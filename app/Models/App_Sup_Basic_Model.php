<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_Sup_Basic_Model extends Model
{
    protected $table = 'app_sup_basic_models';
    protected $fillable = [
        'user_id',
        'username',
        'no_client',
        'no_styles',
        'expiring_date',
    ];
}
