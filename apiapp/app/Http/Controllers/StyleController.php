<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function style(){
        return view('stylesetting.style');
    }
}
