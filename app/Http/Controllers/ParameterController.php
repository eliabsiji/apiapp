<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\app_parameter_Model;
use Illuminate\Support\Facades\Auth;

class ParameterController extends Controller {
    public function index() {

        $style = app_parameter_Model::where( 'user_id', Auth::user()->id )->leftjoin( 'users', 'app_parameter_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'app_parameter_models.parameter as parameter',
        'app_parameter_models.description as description',
        'app_parameter_models.created_at as datecreated' ] );
        return view( 'stylesetting.parameter' )->with( 'style', $style );

    }

    public function saveparameter( Request $request ) {

        app_parameter_Model::create( [
            'user_id'=> Auth::user()->id,
            'parameter'=>$request->parameter,
            'description'=>$request->description,

        ] );
        return back() ->with( 'success', 'You have succefully Registered Parameter' );
    }

    public function deleteparameter( $id ) {
        $parameter  = app_parameter_Model::find( $id )->delete();
        return view( 'stylesetting.style' )->with( 'parameter', $parameter );
    }
}

