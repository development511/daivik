<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request){
        $dateOfBirth = $request->date;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $date =  $diff->format('%y');
       // dd($date);
        return view('birthday',compact('date'));
    }
   
   
}
