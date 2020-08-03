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

//INIO  DE RUTAS VISTA E-COMERCE
//**

Route::get('/', function () {
    return view('welcome');
});

//Activate `verify' route for email autentication
// Auth::routes(['verify'=>true]);

Auth::routes(['verify'=> true]);

// ->middleware for acces only if user has been email verified,

Route::get('/home', 'HomeController@index')->name('home')->Middleware('verified');

//Route for admin user

Route::get('/adm', 'UsersController@myHome',function()
{
    return view('adm');
}
);


//Route for stander users
Route::get('/', 'UsersController@myUsers');

//FIN DE RUTAS VISTA E-COMERCE

/*
|--------------------------------------------------------------------------
| admin  Routes
|--------------------------------------------------------------------------
*/

//INIIO DE RUTAS VISTAS DE ADMINISTARDOR

Route::resource('/admin','AdminResourceController');

Route::get('admin/table','AdminResourceController@index')->name('table');

Route::get('admin/create_users','AdminResourceController@create')->name('create');




