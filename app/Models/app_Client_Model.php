<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_Client_Model extends Model
{
    use HasFactory;
    protected $table = "app_client_models";

    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'phonenumber',
        'gender',
        'address',
    ];
}
