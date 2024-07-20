<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\app_project_Model;
use App\Models\app_Client_Model;
use App\Models\app_style_Model;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    public function index() {

        $project = app_project_Model::where( 'user_id', Auth::user()->id )
        ->leftjoin( 'users', 'app_project_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'app_project_models.projectname as projectname', 'app_project_models.id as projectid',
        'app_project_models.description as description', 'app_project_models.deadline as deadline',
        'app_project_models.created_at as datecreated' ] );
        return view( 'projectsetting.project' )->with( 'project', $project );

    }

    public function saveproject( Request $request ) {
        app_project_Model::create( [
            'user_id'=> Auth::user()->id,
            'projectname'=>$request->projectname,
            'description'=>$request->description,
            'deadline'=>$request->deadline,

        ]);
        return back() ->with( 'success', 'You have succefully Registered Parameter' );
    }
    public function deleteproject( $id ) {
        $project  = app_project_Model::find( $id )->delete();
        return view( 'projectsetting.project' )->with( 'project', $project );
    }
    public function editproject( $id ) {
        $project  = app_project_Model::find( $id );
        return view( 'projectsetting.editproject')->with( 'project', $project );
    }

      public function updateproject(Request $request ){
        app_project_Model::updateOrCreate( [
            'user_id'=> Auth::user()->id,
            'id'=>$request->projectid,
        ] ,
        [
            'projectname'=>$request->projectname,
            'description'=>$request->description,
            'deadline'=>$request->deadline,

        ]);

        return redirect ()->route ( 'project' )->with( 'success', 'Data Updated Successfully' );

    }
    public function projectmanager() {

        $project = app_project_Model::where( 'user_id', Auth::user()->id )
        ->leftjoin( 'users', 'app_project_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'app_project_models.projectname as projectname', 'app_project_models.id as projectid',
        'app_project_models.description as description', 'app_project_models.deadline as deadline',
        'app_project_models.created_at as datecreated' ] );
        return view( 'projectsetting.projectmanager' )->with( 'project', $project );

    }

    public function projectstyle( $id ) {
        $project = app_project_Model::where( 'id', $id )
        ->where( 'user_id', Auth::user()->id )
        ->get( [ 'app_project_models.id as projectid', 'app_project_models.projectname as projectname',
       'app_project_models.deadline as deadline' ] );
        $style = app_style_Model::where( 'user_id', Auth::user()->id )
        ->leftjoin( 'users', 'app_style_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'app_style_models.style as style', 'app_style_models.img as img',
        'app_style_models.description as description',
        'app_style_models.created_at as datecreated' ] );
        return view( 'projectsetting.projectstyle' )->with( 'style', $style )
        -> with( 'project', $project );

    }

}
