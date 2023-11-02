<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }

    public function signin()
    {
        return view('sign_in');
    }
    
    public function signup()
    {
        return view('sign_up');
    }
}

