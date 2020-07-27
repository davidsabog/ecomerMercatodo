<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//Activate `verify' route for email autentication
Auth::routes(['verify'=>true]);

// ->middleware for acces only if user has been email verified, 
Route::get('/home', 'HomeController@index')->name('home')->Middleware('verified');

//Route for admin user
Route::get('/adm', 'UsersController@myHome');

//Route for admin user
Route::get('/table', 'AdminResource@index');

//Route for stander users
Route::get('/', 'UsersController@myUsers');

