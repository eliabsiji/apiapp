<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\app_Client_Model;
use Illuminate\Support\Facades\Auth;

class ClientContactController extends Controller
{
        public function index(){
        $allcontacts = app_Client_Model::where('user_id',Auth::user()->id)
        ->leftjoin('users','app_client_models.user_id','=','users.id')
        ->get(['users.id as id','app_client_models.fullname as fullname','app_client_models.phonenumber as phonenumber',
        'app_client_models.id as clientid',      'app_client_models.gender as gender',
         'app_client_models.address as address','app_client_models.created_at as datecreated']);
            return view('client.clientcontact')->with('clients',$allcontacts);


    }


}
