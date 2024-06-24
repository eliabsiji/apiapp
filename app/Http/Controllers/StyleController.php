<?php

namespace App\Http\Controllers;

use App\Models\App_style_Model;
use App\Models\User;
use App\Models\StyleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StyleController extends Controller
{
    public function index(){

        $style = App_style_Model::where('user_id',Auth::user()->id)
        ->leftjoin('users','app_style_models.user_id','=','users.id')
        ->get(['users.id as id','app_style_models.style as style', 'app_style_models.img as img',
                'app_style_models.description as description',
               'app_style_models.created_at as datecreated']);
        return view('stylesetting.style')->with('style',$style);
    }


  public function savestyle(Request $request){

         App_style_Model::create([
        'user_id'=> Auth::user()->id,
        'style'=>$request->style,
        'img'=>$request->img,
        'description'=>$request->description,

    ]);
    return back() ->with('success','You have succefully Registered Style');
}
}
