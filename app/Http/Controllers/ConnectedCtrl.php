<?php

namespace App\Http\Controllers;

use Auth;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use  App\Connected;
use Log;

class ConnectedCtrl extends Controller
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
    
        $this->validate($request, [
            'talent' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'photos'=>'required',        
        ]);
        
        if($request->hasFile('photos')) {

            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              ]);          

            $allowedfileExtension = ['pdf','jpg','png','docx'];
            $image = $request->file('photos');

            $extension = $image->getClientOriginalExtension();

            $check = in_array($extension,$allowedfileExtension);

            if ($check) {
                # code...
                
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Connected::make($image)->resize(160, 160)->save( public_path() . '\\storage\\app\\photos'. $filename );
                $person->image = $filename;

                // $destinationPath = public_path('/storage/app/photos');
                // $imagePath = $destinationPath. "/".  $name;
                // $image->move($destinationPath, $name);

                Storage::disk('local')->put($image, 'photos');

                Connected::create([
                    'talent' => $request->input('talent'),
                    'username' => $request->input('username'),
                    'phone' => $request->input('phone'),
                ]);

                echo "Upload Successfully";

            }
            else {
                echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
            }
        }
    
    }
    
}
