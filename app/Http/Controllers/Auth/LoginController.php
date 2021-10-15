<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')
            ->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')
            ->user();
        $this->_registerOrLoginFacebookUser($user);
        return redirect()->route('home');
    }
    //Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')
            ->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('home');
    }




    public function _registerOrLoginUser($data)
    {
    //  dd($data);
        $user =   User::where(['email' => $data->email])->first();
        if (!$user) {

            $user = User::create([
                'first_name' => $data->name,
                'email'         => $data->email,
                'avatar'         => $data->avatar,
                'provider_id'   => $data->id,
            ]);
            Auth::login($user);
        }else{
            Auth::login($user);
        }
    }
    public function _registerOrLoginFacebookUser($data)
    {
        //  dd($data);
        $user =   User::where(['email' => $data->email])->first();
        if (!$user) {

            $user = User::create([
                'first_name' => $data->name,
                'email'         => $data->email,
                'avatar'         => $data->avatar,
                'provider_id'   => $data->id,
            ]);
            Auth::login($user);
        } else {
            Auth::login($user);
        }
    }
}
