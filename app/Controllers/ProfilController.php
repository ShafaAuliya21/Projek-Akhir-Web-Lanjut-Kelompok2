<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfilController extends BaseController
{
    public function index()
    {
        return view('profile-mahasiswa');
    }
}
