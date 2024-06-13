<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleparameterController extends Controller
{
    public function index(){
        return view ('stylesetting.parameter');
    }
}
