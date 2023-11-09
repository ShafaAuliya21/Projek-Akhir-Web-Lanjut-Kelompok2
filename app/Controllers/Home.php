<?php

namespace App\Controllers;
// use vendor\myth\auth\src\Controllers\AuthController;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }

    public function signin()
    {
        return view('auth/sign_in');
    }
    
    public function signup()
    {
        return view('auth/sign_up');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}

