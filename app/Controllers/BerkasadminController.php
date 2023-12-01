<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;

class BerkasdminController extends BaseController
{
    public $mahasiswaModel;
    public $berkasModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->berkasModel = new BerkasModel();
    }

    public function index()
    {
        $data=[
            'title' => 'List Berkas',
            'berkas' => $this->berkasModel->getBerkas(),
        ];
        return view('dashboard-admin/list_berkas', $data);
    }

}