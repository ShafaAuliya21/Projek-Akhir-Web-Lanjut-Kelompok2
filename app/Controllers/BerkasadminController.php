<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;

class BerkasadminController extends BaseController
{
    public $mahasiswaModel;
    public $berkasanModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->berkasanModel = new BerkasModel();
    }


    public function index()
    {
        $data=[
            'title' => 'List Berkas',
            'berkas' => $this->berkasanModel->getBerkas(),
        ];
        return view('dashboard-admin/list_berkas', $data);
    }

}