<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StlyeModel;
use App\Models\StyleModel;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function style(){
        return view('stylesetting.style');
    }


  public function savestyle(Request $request){
    $user = User::create([
    ]);
         StyleModel::create([
        'user_id'=> $user->id,
        'style'=>$request->style,
        'description'=>$request->description,

    ]);
    return back() ->with('success','You have succefully Registered Style');
}
}
