<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

    use AuthenticatesUsers{
        logout as protected originalLogout;
    }

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

    public function redirectTo()
    {
        if (auth()->user()->roles()->first()->allowed_route != '') {

            Cache::forget("role_routes");
            Cache::forget("user_routes");

            return $this->redirectTo = LaravelLocalization::getCurrentLocale().'/'.auth()->user()->roles()->first()->allowed_route . '/dashboard';
        }
    }

    public function username()
    {
        return 'username';
    }


    protected function loggedOut(Request $request)
    {
        Cache::forget('user_routes');
        Cache::forget('role_routes');
        Cache::forget('user_routes');

//        return redirect(LaravelLocalization::getCurrentLocale().'/');

    }



}
