<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use App\Models\MahasiswaModel;

class JadwaladminController extends BaseController
{
    public $mahasiswaModel;
    public $jadwalModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->jadwalModel = new JadwalModel();
    }

    public function index()
    {
        $data=[
            'title' => 'List Jadwal',
            'jadwal' => $this->jadwalModel->getBerkas(),
        ];
        return view('dashboard-admin/data_jadwal', $data);
    }
}