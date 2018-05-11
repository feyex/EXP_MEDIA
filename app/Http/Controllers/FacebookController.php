<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\FacebookAccountService;

class FacebookController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function callback(FacebookAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
}
