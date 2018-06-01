<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Getprof;

class GetprofCtrl extends Controller
{
    //
    public function prof()
    {
        return view('getprof');
    }

    public function profs(Request $request)
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
    }
}
