<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Socialite;
use Log;
use Auth;
use Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request)
    {
        $currentPathName = $request->input('invisible');

         switch ($currentPathName) {
            
            case 'discover':
                # code...
                return redirect('/connected');
                break;
            

            case 'project':
                # code...
                return redirect('/project');
                break;

            case 'professional':
                # code...
                return redirect('/profile');
                break;
            
            default:
                # code...
                break;
        }

    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function logout() {
        Auth::logout();
        return redirect('/programs');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
       
    }


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->route('discover');
    }

    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook_id', $facebookUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_id' => $facebookUser->id,
            'avatar' => $facebookUser->avatar
        ]);
    }

}
