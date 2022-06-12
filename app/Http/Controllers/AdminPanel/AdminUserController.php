<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\survey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.user.index',[
            'data' => $data
        ]);
    }

    public function surveyfillers($id)
    {
        $attendance = DB::table('attendances')->where('survey_id','=',$id)->get('user_id')->pluck('user_id');
        $data = User::whereIn('id' , $attendance)->get();
        return view('admin.user.index',[
            'data' => $data
        ]);
    }

    public function users()
    {
        $role = DB::table('roles')->where('name','=','user')->get()->pluck('id')[0];
        $roleUser = RoleUser::where('role_id','=',$role)->get('user_id')->pluck('user_id');
        $data = User::whereIn('id',$roleUser)->get();
        return view('admin.user.index',[
            'data' => $data
        ]);
    }

    public function creators()
    {
        $role = DB::table('roles')->where('name','=','creator')->get()->pluck('id')[0];
        $roleUser = RoleUser::where('role_id','=',$role)->get('user_id')->pluck('user_id');
        $data = User::whereIn('id',$roleUser)->get();
        return view('admin.user.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        $roles = Role::all();
        return view('admin.user.show',[
            'data' => $data,
            'roles' => $roles
        ]);
    }

    public function addrole(Request $request,$id)
    {
        $data = new RoleUser();
        $data->user_id = $id;
        $data->role_id = $request->role_id;
        $data->save();
        return redirect(route('admin.user.show',['id'=> $id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $userID
     * @return \Illuminate\Http\Response
     */

    public function destroyrole($userID,$roleID)
    {
        $user = User::find($userID);
        $user->roles()->detach($roleID);
        return redirect(route('admin.user.show',['id'=> $userID]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
