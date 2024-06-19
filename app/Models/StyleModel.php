<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'style',
        'img',
        'description',
    ];
}

