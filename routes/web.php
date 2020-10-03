<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
    // Route::post('/login',"Controller@login");  
});
Route::get('register', function () {
    return view('register');
     
});
 Route::post('singnup', 'Auth\AdminLoginController@adminLogin');
//   //Route::post('birthday','FrontController@index');
//   Route::post('user_register','Auth\RegisterController@postRegister');
// //Adminroute//
Route::get('adminLogin','admin\adminController@index');
Route::get('dashborad','admin\adminController@dashborad');
Route::get('activeuser','admin\adminController@user');
Route::get('deactive','admin\adminController@deactive');


Auth::routes();

Route::get('home', 'HomeController@index');


