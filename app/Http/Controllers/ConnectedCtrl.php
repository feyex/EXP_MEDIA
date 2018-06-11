<?php

namespace App\Http\Controllers;

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

        $role = Role::where('name', 'role-user')->first();
       
        $permission = Permission::where('name', 'user')->first();
        if (!$role->perms()->get()->contains('id', $permission->id)) {

            $role->attachPermission($permission);
        }  

        if (!$user->hasRole('role-user')) {
            
            $user->attachRole($role);
        }

        return view('getconnected');    
    }
    
    public function store(Request $request)
    {   
        $userId = Auth::user()->id;

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
            $profile->photos =  $image->move($destinationPath, $name);
        }

        $profile->talent = $request->input('talent');
        $profile->username = $request->input('username');
        $profile->phone = $request->input('phone');
        $profile->user_id = $userId;
        
        $profile->save();
        echo "('success', 'Your article has been added successfully. Please wait for the admin to approve.')";

    }
    
}
