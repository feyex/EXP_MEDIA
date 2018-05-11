<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\creative;
use Log;

class experiaController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    
    public function creative()
    {
        return view('creative');
    }

    public function program()
    {
        return view('programs');
    }

    public function insight()
    {
        return view('insight');
    }

    public function discovered()
    {
        return view('discovered');
    }

    public function save(Request $request)
    {
        //
        Log::info("I am getting called");

        $this->validate($request, ['name' => 'required']);
        $this->validate($request, ['email' => 'required']);
        $this->validate($request, ['phone' => 'required']);
        $this->validate($request, ['location' => 'required']);
        $this->validate($request, ['know_us' => 'required']);
        $this->validate($request, ['education_level' => 'required']);
        $this->validate($request, ['interest' => 'required']);
        $this->validate($request, ['skills' => 'required']);
        $this->validate($request, ['intern_section' => 'required']);
        $this->validate($request, ['file_upload' => 'required']);


        $link =creative::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'location' => $request->input('location'),
            'know_us' => $request->input('know_us'),
            'education_level' => $request->input('education_level'),
            'interest' => $request->input('interest'),
            'skills' => $request->input('skills'),
            'intern_section' => $request->input('intern_section'),
            'file_upload' => $request->input('file_upload')
            
        ]);
        
        Log::info('I am tweet' . $link);

        return $link;
         
    
    }

    public function ins(Request $request)
    {
        //
      //  Log::info("I am getting called");

        $this->validate($request, ['name' => 'required']);
        $this->validate($request, ['email' => 'required']);
        $this->validate($request, ['project' => 'required']);
        $this->validate($request, ['advisor' => 'required']);

        $insight =insight::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'project' => $request->input('project'),
            'advisor' => $request->input('advisor'),
            ]);
        
           // Log::info('I am being called' . $insight);
    
            return $insight;
             
        
        }
}
