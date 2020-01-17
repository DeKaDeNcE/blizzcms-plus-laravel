<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


use Theme;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function check_Login(Request $request)
    {
        $this->validate($request, [
            'input-email' => 'required', 
            'input-password' => 'required',
        ]);

        $user_data = array(
            'email'  => $request->get('input-email'),
            'password' => $request->get('input-password')
        );

        if(!Auth::attempt($user_data)){
            return redirect('login');
        }

        if (Auth::check() ) {
            return redirect(app()->getLocale() . '/home');
        }
    }

    public function login()
    {
        return Theme::view('Login');
    }

    function logout(){
        Auth::logout();
        return redirect(app()->getLocale() . '/home');
    }
}
