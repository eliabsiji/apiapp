<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;
    protected $table = "app_client";

    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'phonenumber',
        'gender',
        'address',
    ];
}
