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
     
}

