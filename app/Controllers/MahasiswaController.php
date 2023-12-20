<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\PendaftaranModel;

class MahasiswaController extends BaseController
{
    public $pendaftaranModel;
    public $berkasModel;

    public function __construct()
    {
       
        $this->pendaftaranModel = new PendaftaranModel();
        
        $this->berkasModel = new BerkasModel();
       

    }

    public function index()
{
    $dataAllBerkas = $this->berkasModel->countBerkasByCreator(user()->id);
    $dataAllPendaftaran = $this->pendaftaranModel->countPendaftaranByCreator(user()->id);
    $dataPendaftaran = $this->pendaftaranModel->get()->getResultArray();

    $data = [
        'title'             => 'User',
        'dataAllBerkas'     => $dataAllBerkas,
        'dataAllPendaftaran' => $dataAllPendaftaran,
        'dataPendaftaran'   => $dataPendaftaran,
    ];

    return view('dashboard-mahasiswa', $data);
}

    
}
