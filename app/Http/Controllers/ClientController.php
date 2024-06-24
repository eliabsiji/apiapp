<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StyleModel;
use App\Models\App_style_Model;
use App\Models\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function index(){

        $client = User::rightjoin('app_client','app_client.user_id','=','users.id')
                    ->get(['users.id as id','app_client.fullname as fullname',
                            'app_client.email as email','app_client.phonenumber as phonenumber',
                           'app_client.gender as gender','app_client.address as address',
                           'app_client.created_at as datecreated']);
        return view('client.client')->with('client',$client);

    }

  public function saveclient(Request $request){
    $chkphone = ClientModel::where('phonenumber','=',$request->phonenumber)->exists();
    if($chkphone){
        return back() ->with('danger','Phone Number already registered');


    }
             ClientModel::create([
            'user_id'=> Auth::user()->id,
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address,
        ]);

        return back() ->with('success','You have succefully Registered Client');
  }

  public function clientstyle(){

    $style = App_style_Model::where('user_id',Auth::user()->id)
    ->leftjoin('users','app_style_models.user_id','=','users.id')
    ->get(['users.id as id','app_style_models.style as style', 'app_style_models.img as img',
            'app_style_models.description as description',
           'app_style_models.created_at as datecreated']);
return view('client.clientstyle')->with('style',$style);

  }
}







// public function editclient($id){
//     $client  = ClientModel::find($id);
//       return view('client.editclient')->with('client',$client);
//   }


// public function updateclient(Request $request){
//     $reg = ClientModel::find($request->input('id'));
//     $reg ->fn = $request->input('fullname');
//     $reg->phone = $request->input('phonenumber');
//     $reg->gender = $request->input('gender');
//     $reg->address = $request->input('address');
//     $reg->save();

//     return redirect('client')->with("success","Data Updated");

// }


// public function deleteclient($id){
//     $client  = ClientModel::find($id)->delete();
//       return redirect('/client')->with("success","Data Updated");






