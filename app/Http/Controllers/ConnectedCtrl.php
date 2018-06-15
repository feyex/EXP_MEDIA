<?php

namespace App\Http\Controllers;


use App\User;
use Auth;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Connected;


class ConnectedCtrl extends Controller
{      
    //
    public function __construct()
    {
        # code...
        $this->middleware('auth');
    }

    public function index()
    {       
        $user = Auth::user();

        $user_id = $user->id;

        $profile = Connected::where('user_id', $user_id)->with('user')->first();
        $role = Role::where('name', 'role-user')->first();
       
        $permission = Permission::where('name', 'user')->first();
        if (!$role->perms()->get()->contains('id', $permission->id)) {

            $role->attachPermission($permission);
        }  

        if (!$user->hasRole('role-user')) {
            
            $user->attachRole($role);
        }

        return view('getconnected')->with('profile', $profile);    
    }
    
    public function store(Request $request)
    {   
       	$userId = Auth::user()->id;
        $user = User::findOrFail($userId)->first();

        $this->validate($request, ['talent' => 'required']);
        $this->validate($request, ['username' => 'required']);
        $this->validate($request, ['phone' => 'required']);
        $this->validate($request, ['photo' => 'required']);

        $profile = new Connected();   

        if ($request->file('photo')) {
            
            $image = $request->file('photo');
            $name = str_slug($request->input('username')) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/photos');
            // $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $profile->photos =   $name;
        }


        $profile->talent = $request->input('talent');
        $profile->username = $request->input('username');
        $profile->phone = $request->input('phone');
        
        $user->connected()->save($profile);

      return view('getconnected')->with('profile', $profile);

    }
    
}
