<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MahasiswaController extends BaseController
{
    public function index()
    {
        return view('dashboard-mahasiswa');
    }

}
