<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleModel;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index(){

        $style = User::rightjoin('style_models','style_models.user_id','=','users.id')
                    ->get(['users.id as id','style_models.style as style',
                            'style_models.description as description',
                           'style_models.created_at as datecreated']);
        return view('stylesetting.style')->with('style',$style);
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
