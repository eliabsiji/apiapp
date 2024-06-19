<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleparameterModel;
use App\Models\StyleModel;
use Illuminate\Http\Request;

class StyleparameterController extends Controller
{

    public function index(){

        $style = User::rightjoin('style_models','style_models.user_id','=','users.id')
                    ->get(['users.id as id','style_models.style as style',
                            'style_models.img as img',
                           'style_models.created_at as datecreated']);
        return view('stylesetting.stylesparameter')->with('style',$style);
    }

    // public function saveparameter(Request $request){
    //     $user = User::create([
    //     ]);
    //          StyleparameterModel::create([
    //         'user_id'=> $user->id,
    //         'parameter'=>$request->parameter,
    //         'description'=>$request->description,


    //     ]);
    //     return back() ->with('success','You have succefully Registered parameter');
    // }
}
