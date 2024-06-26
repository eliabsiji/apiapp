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
                    ->get(['users.id as id','app_style_models.style as style','app_style_models.id as styleid',
                            'app_style_models.img as img',
                            'app_style_models.created_at as datecreated',
                            'app_style_models.updated_at as dateupdated']);
        return view('stylesetting.stylesparameter')->with('styleparameter',$styleparameter);
    }

    public function addstyleparameter(Request $request){

        for($i=0 ; $i <  count($request->parameters); $i++){
        //check if parameters already exist for this style.
        $checkparameter = StyleparameterModel::where('user_id',$request->userid)
                        ->where('styleid',$request->styleid)
                        ->where('parameterid',$request->parameters[$i])->exists();
        if(!$checkparameter){
            StyleparameterModel::create(
                        ['user_id'=> $request->userid,
                         'styleid'=> $request->styleid,
                         'parameterid'=> $request->parameters[$i]
                        ]);
        }

        }
        return back() ->with('success','parameter Assigned Successfully');
    }

}
