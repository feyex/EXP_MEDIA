<?php

namespace App\Http\Controllers;

use App\Connected;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Connected::all();

        return view('discover')->with('name', 'discover')->with('profiles', $profiles);
    }
}
