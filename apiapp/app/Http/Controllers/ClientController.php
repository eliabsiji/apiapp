<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ClientModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index(){

        $client = User::leftjoin('client','client.user_id','=','users.id')
                    ->get(['users.id as id','client.phonenumber as phonenumber',
                           'client.gender as gender','client.address as address',
                           'client.created_at as datecreated']);
        return view('client.client')->with('client',$client);

    }

  public function saveclient(Request $request){
    $chkphone = ClientModel::where('phonenumber','=',$request->phonenumber)->exists();
    if($chkphone){
        return back() ->with('danger','Phone Number already registered');
    }else{
         $user = User::create([

        ]);
    }
             ClientModel::create([
            'user_id'=> $user->id,
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'address'=>$request->address,
        ]);

        return back() ->with('success','You have succefully Registered Client');
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






