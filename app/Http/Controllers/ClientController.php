<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleModel;
use App\Models\app_style_Model;
use App\Models\app_Client_Model;
use App\Models\app_style_parameter_Model;
use App\Models\app_parameter_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller {

    public function index() {
        $client = app_Client_Model::where( 'user_id', Auth::user()->id )
        ->leftjoin( 'users', 'app_client_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'app_client_models.fullname as fullname', 'app_client_models.id as clientid',
        'app_client_models.email as email', 'app_client_models.phonenumber as phonenumber',
        'app_client_models.gender as gender', 'app_client_models.address as address',
        'app_client_models.created_at as datecreated' ] );
        return view( 'client.client' )->with( 'client', $client );

    }

    public function saveclient( Request $request ) {
        $chkphone = app_Client_Model::where( 'phonenumber', '=', $request->phonenumber )->exists();
        if ( $chkphone ) {
            return back() ->with( 'danger', 'Phone Number already registered' );

        }
        app_Client_Model::create( [
            'user_id'=> Auth::user()->id,
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address,
        ] );

        return back() ->with( 'success', 'You have succefully Registered Client' );
    }

    public function editclient( $id ) {
        $client  = app_Client_Model::find( $id );
        return view( 'client.editclient' )->with( 'client', $client );
    }

    public function updateclient(Request $request ){
        app_Client_Model::updateOrCreate( [
            'user_id'=> Auth::user()->id,
            'id'=>$request->clientid,
        ] ,
        [
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address,
        ]);
     return redirect()->route('client')->with('success','Data updated successfully');


   }

    public function deleteclient( $id ) {
        $client  = app_Client_Model::find( $id )->delete();
        return back() ->with( 'success', 'Data Deleted Successfully' );

    }

    public function clientstyle( $id ) {
        $client = app_Client_Model::where( 'id', $id )
        ->where( 'user_id', Auth::user()->id )
        ->get( [ 'app_client_models.id as clientid', 'app_client_models.fullname as fullname',
        'app_client_models.phonenumber as phonenumber' ] );
        $style = app_style_Model::where( 'user_id', Auth::user()->id )
        ->leftjoin( 'users', 'app_style_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id','app_style_models.id as styleid', 'app_style_models.style as style', 'app_style_models.img as img',
        'app_style_models.description as description',
        'app_style_models.created_at as datecreated' ] );
        return view( 'client.clientstyle' )->with( 'style', $style )
        -> with( 'client', $client );

    }

    public function measurement($clientid,$styleparameterid,$styleid) {

        $table_col_no = app_style_parameter_Model::where('app_styleparameter_models.user_id',Auth::user()->id)
        ->where('styleid',$styleid)
        ->leftjoin('app_style_models','app_style_models.id','=','app_styleparameter_models.styleid')
        ->leftjoin('app_parameter_models','app_parameter_models.id','=','app_styleparameter_models.parameterid')
        ->get(['app_parameter_models.parameter','app_style_models.style as style']);
        foreach ($table_col_no as $col => $value) {
           $query = "ALTER TABLE app_measurement_models ADD ".$value->style."_".$value->parameter." varchar(255)";

           try{
            DB::statement($query);
           }catch(\Illuminate\Database\QueryException $e){
                echo $e->getMessage();
           }
        }
        $client = app_Client_Model::where( 'app_client_models.id', $clientid )->get();
        $no_fields = app_style_parameter_Model::where('app_styleparameter_models.user_id',Auth::user()->id)
                    ->where('styleid',$styleid)
                    ->leftjoin('app_parameter_models','app_parameter_models.id','=','app_styleparameter_models.parameterid')
                    ->get(['app_parameter_models.parameter']);

        return view('client.clientmeasurement')->with('client',$client)
                        ->with('no_fields',$no_fields);
    }
}
