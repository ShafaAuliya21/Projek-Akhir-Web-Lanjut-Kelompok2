<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\PendaftaranModel;

class MahasiswaController extends BaseController
{
    public $berkasModel;
    public $pendaftaranModel;

    public function __construct(){
        $this->request = service("request");
        $this->berkasModel = new BerkasModel();
        $this->pendaftaranModel = new PendaftaranModel();
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
            'dataPendaftaran' => $dataPendaftaran,
        ];
    
        return view('dashboard-mahasiswa', $data);
    }
    
}
