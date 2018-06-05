<?php

namespace App\Http\Controllers;

use Auth;
use Log;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Getprof;

class GetprofCtrl extends Controller
{
    public function __construct()
    {
        # code...
        $this->middleware('auth');
    }

    //
    public function index()
    {   
        $user = Auth::user();

        $role = Role::where('name', 'role-professional')->first();
       
        $permission = Permission::where('name', 'professional')->first();
        if (!$role->perms()->get()->contains('id', $permission->id)) {

            $role->attachPermission($permission);
        }        

        if (!$user->hasRole('role-professional')) {
            # code...
            $user->attachRole($role);
        }

        return view('getprof');
    }


    public function areaofinterest(Request $request)
    {   
        //
        $this->validate($request, ['category' => 'required']);
        $this->validate($request, ['past_project' => 'required']);
        $this->validate($request, ['project' => 'required']);
        $this->validate($request, ['talent' => 'required']);

        $insight = Getprof::create([
            'category' => $request->input('category'),
            'past_project' => $request->input('past_project'),
            'project' => $request->input('project'),
            'talent' => $request->input('talent'),
        ]);

        return view('getprof');

    }
}
