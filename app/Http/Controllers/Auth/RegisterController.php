<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [  
            'name' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'profilename' => ['required', 'string', 'max:255'],
            'parentname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
             'password' => ['required', 'string', 'min:8'],
            'repeatpass' => ['required', 'string', 'min:8'],
            'phoneno' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lname' => $data['lname'],
            'profilename' => $data['profilename'],
            'parentname' => $data['parentname'],
            'email' => $data['email'],
            'city' => $data['city'],
            'state' => $data['state'],
            'district' => $data['district'],
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
            'repeatpass' => Hash::make($data['password']),
            'phoneno' => $data['phoneno'],
        ]);
    }
    public function postRegister(Request $request)
    { 

        request()->validate([
        'name' => 'required',
        'lname' => 'required',
        'profilename' => 'required',
        'parentname' => 'required',
        'city' => 'required',
        'state' => 'required',
        'email' => 'required|email|unique:users',
        'district' => 'required',
        'country' => 'required',
        'password' => 'required|confirmed|min:6',
        'phoneno' => 'required',
        ]);
        
        $data = $request->all();
        $check = $this->create($data);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }
        return Redirect::to("home")->withSuccess('Great! You have Successfully loggedin');
    }
}
