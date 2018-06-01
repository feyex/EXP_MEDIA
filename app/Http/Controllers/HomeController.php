<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Connected;
use Log;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
            
        
            // if($request->hasFile('photos'))
            
            // {
            
            //     $allowedfileExtension=['pdf','jpg','png','docx'];
                
            //     $files = $request->file('photos');
                
            //     foreach($files as $file){
                
            //     $filename = $file->getClientOriginalName();
                
            //     $extension = $file->getClientOriginalExtension();
                
            //     $check=in_array($extension,$allowedfileExtension);
                
            // //dd($check);
            
            //     if($check)
                
            //     {
            //         $items= Connected::create($request->all());
                
            //         foreach ($request->photos as $photo) {
                
            //         $filename = $photo->store('photos');

        

            Connected::create([
                'talent' => $request->input('talent'),
                'name' => $request->input('name'),
                'username' => $request->input('username'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
            ]);

            if($request->hasFile('photos')) {

                $image = $request->file('photos');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Connected::make($image)->resize(160, 160)->save( public_path() . '\\storage\\app\\photos'. $filename );
                $person->image = $filename;

                    echo "Upload Successfully";
            };
    }  
    
    
}
