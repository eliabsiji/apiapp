<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleModel;
use App\Models\App_style_Model;
use Illuminate\Http\Request;
use App\Models\StyleparameterModel;
use Illuminate\Support\Facades\Auth;

class StyleparameterController extends Controller
{

    public function index(){

        $styleparameter = App_style_Model::where('user_id',Auth::user()->id)->leftjoin('users','app_style_models.user_id','=','users.id')
                    ->get(['users.id as id','app_style_models.style as style',
                            'app_style_models.img as img',
                            'app_style_models.created_at as datecreated',
                            'app_style_models.updated_at as dateupdated']);
        return view('stylesetting.stylesparameter')->with('styleparameter',$styleparameter);
    }

    public function addstyleparameter(Request $request){
        print_r($request->all());
        StyleparameterModel::updateOrCreate([

        ]);
    }

}
