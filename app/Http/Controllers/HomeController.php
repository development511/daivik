<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   // $result ="select name ,lname from users where age >=19";
        $result = DB::table('users')->select('name','lname','age','likes','comments')->where('age' ,'<=' ,25)->get();
        //$count = DB::table('users')->select('comments')->count();
        // dd($result);
        //  exit();
        return view('home',compact('result'));
    }
    
}
