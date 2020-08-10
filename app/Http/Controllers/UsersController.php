<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function __construct()
    {
    }
    /**
     * Show the Adim view.
     *
     * @return \Illuminate\Http\Response
     */
    public function myHome()
    {
        return view('admin.adm');
    }
    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function myUsers()
    {
        return view('welcome');

    }

}
