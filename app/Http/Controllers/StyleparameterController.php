<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleModel;
use App\Models\App_style_Model;
use App\Models\app_parameter_Model;
use Illuminate\Http\Request;
use App\Models\app_style_parameter_Model;
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
        //catching posssible parameters already selected and stored in the database
        $selected_parameters = [];
        $selected_parameters_with_name = [];
        //checking if the parameters array is null or empty
        if(empty($request->parameters)){

            return back() ->with('warning','No Parameter Selected');
        }
        else{
              for($i=0 ; $i <  count($request->parameters); $i++){
                    //check if parameters already exist for this style.
                    $checkparameter = app_style_parameter_Model::where('user_id',$request->userid)
                                    ->where('styleid',$request->styleid)
                                    ->where('parameterid',$request->parameters[$i])->exists();
                    if(!$checkparameter){
                        app_style_parameter_Model::create(
                                    ['user_id'=> $request->userid,
                                    'styleid'=> $request->styleid,
                                    'parameterid'=> $request->parameters[$i]
                                    ]);
                        }else{
                        //add this parameter to the selected parameters array
                           // $selected_parameters[] = $i;
                            array_push($selected_parameters,$request->parameters[$i]);
                        }
                    }
                    //print_r($selected_parameters);

                    if(empty($selected_parameters)){
                            return back() ->with('success','parameter Assigned Successfully');
                    }else{
                        //loop through the selected parameters  to querry database
                        print_r($selected_parameters);
                        for($i=0; $i < count($selected_parameters); $i++){
                            $parameter_name = app_parameter_Model::where('id',$selected_parameters[$i])
                            ->pluck('parameter');
                            //print($parameter_name);
                           array_push($selected_parameters_with_name,$parameter_name);

                        }
                        return back() ->with('selected','parameters already Selected')
                        ->with('selected_parameters',$selected_parameters_with_name);

                    }

        }

    }

}
