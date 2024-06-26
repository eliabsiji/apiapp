<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StyleModel;
use Illuminate\Http\Request;
use App\Models\ParameterModel;
use App\Models\App_Style_Model;
use App\Models\StyleparameterModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class AddparameterController extends Controller
{
    public function index($styleid){

        // echo $styleid;
        $style = App_Style_Model::where('user_id',Auth::user()->id)
                           ->where('id',$styleid)->get();

        $parameter = ParameterModel::where('user_id',Auth::user()->id)->get();
        $styleparameter = StyleparameterModel::where('app_styleparameter_models.user_id',Auth::user()->id)
                                    ->leftjoin('app_style_models','app_style_models.id','=','app_styleparameter_models.styleid')
                                    ->leftjoin('app_parameter_models','app_parameter_models.id','=','app_styleparameter_models.parameterid')
                                    ->leftjoin('users','users.id','=','app_styleparameter_models.user_id')
                    ->get(['users.id as id','app_style_models.style as style',
                            'app_parameter_models.parameter as parameter',
                            'app_styleparameter_models.parameterid as ',
                           'app_style_models.created_at as datecreated']);
        return view('stylesetting.addparameter')->with('styleparameter',$styleparameter)
                                                ->with('styles',$style)
                                                ->with('parameters',$parameter);
    }
}
