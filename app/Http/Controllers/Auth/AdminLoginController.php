<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
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
    protected $guard = 'admin';
    public function adminLogin(Request $request)
    {
        $email = $request->input('email');
        $password =$request->input('password');
       
       if(Auth::attempt(['email' => $email, 'password' => $password]))
       {
           return view('admin.dashborad');
       }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
