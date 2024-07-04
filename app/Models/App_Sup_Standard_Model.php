<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_Sup_Standard_Model extends Model
{
 
    protected $table = 'app_sup_standard_models';
    protected $fillable = [
        'user_id',
        'username',
        'no_clients',
        'no_styles',
        'client_contacts',
        'pos',
        'expiring_date',
    ];
}
