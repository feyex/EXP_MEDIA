<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Connected;
use Log;

class ConnectedCtrl extends Controller
{
    //
    public function uploadForm()
    {
        return view('getconnected');    
    }
    
    public function uploadSubmit(Request $request)
    {
    
        $this->validate($request, [
            'talent' => 'required',
            'name' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'photos'=>'required',        
        ]);
    
        Log::info("I am working");
        Log::info('my name is ', array('context' => $request->all())); 
        
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

                echo "Upload Successfully";

                Connected::create([
                    'talent' => $request->input('talent'),
                    'name' => $request->input('name'),
                    'username' => $request->input('username'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                ]);
            }
            else {
                echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
            }
        };
    
    }
    
}
