<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleparameterModel;
use Illuminate\Http\Request;

class StyleparameterController extends Controller
{

    public function index(){

        $style = User::leftjoin('styleparameter_models','styleparameter_models.user_id','=','users.id')
                    ->get(['users.id as id','styleparameter_models.parameter as parameter',
                            'styleparameter_models.description as description',
                           'styleparameter_models.created_at as datecreated']);
        return view('stylesetting.parameter')->with('style',$style);
    }

    public function saveparameter(Request $request){
        $user = User::create([
        ]);
             StyleparameterModel::create([
            'user_id'=> $user->id,
            'parameter'=>$request->parameter,
            'description'=>$request->description,


        ]);
        return back() ->with('success','You have succefully Registered parameter');
    }
}
