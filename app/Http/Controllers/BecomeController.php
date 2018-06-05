<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Become;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class BecomeController extends Controller
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

		return view('become')->with('name', 'become');
	}

	public function store(Request $request )
	{	
			$this->validate($request, [
				'project_type' => 'required',
				'project_pitch' => 'required',
			]);
			
			$userId = Auth::user()->id;
			$user = User::findOrFail($userId);
			
			$user->projects()->save(new Become([
        'project_type' => $request->input('project_type'),
        'project_pitch' => $request->input('project_pitch'),
			]));
			
			return redirect()->route('become')
				->with('success','Pitch added successfully');
	}

	

}
