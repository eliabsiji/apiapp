<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('projectsetting.project');
    }

    public function saveproject(Request $request){
        $user = User::create([
        ]);
             ProjectModel::create([
            'user_id'=> $user->id,
            'projectname'=>$request->projectname,
            'description'=>$request->description,
            'deadline'=>$request->deadline,

        ]);
        return back() ->with('success','You have succefully Registered project');
    }
}
