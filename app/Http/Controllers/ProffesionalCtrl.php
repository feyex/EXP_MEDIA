<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Proffesional;
use Illuminate\Support\Facades\Hash;


class ProffesionalCtrl extends Controller
{   
   

    //
    public function index()
    {
        return view('professional');
    }

    public function create(Request $request)
    {
        //
        $this->validate($request, ['name' => 'required|string|max:255']);
        $this->validate($request, ['email' => 'required|string|email|max:255|unique:users']);
        $this->validate($request, ['password' => 'required|string|min:6|confirmed']);
       

        $insight = Proffesional::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request['password'])
            ]);
            return redirect()->route('getprof');
     }
     
}

