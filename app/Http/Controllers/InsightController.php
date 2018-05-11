<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insight;
class InsightController extends Controller
{
    //
    public function insight()
    {
        return view('insight');
    }

    public function ins(Request $request)
    {
        //
        $this->validate($request, ['name' => 'required']);
        $this->validate($request, ['email' => 'required']);
        $this->validate($request, ['project' => 'required']);
        $this->validate($request, ['advisor' => 'required']);

        $insight = insight::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'project' => $request->input('project'),
            'advisor' => $request->input('advisor'),
            ]);
        
           // Log::info('I am being called' . $insight);
    
           return redirect('/insight')->with('success', 'Thanks for contacting us!');
             echo message;
        
        }
}
