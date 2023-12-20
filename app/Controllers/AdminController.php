<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\PendaftaranModel;

class AdminController extends BaseController
{
    public $mahasiswaModel;
    public $pendaftaranModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->pendaftaranModel = new PendaftaranModel();
    }


    public function index()
    {
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $this->pendaftaranModel->getPendaftaran(),
           
        ];
        return view('dashboard-admin/data_pendaftar', $data);
    }

    public function show($id){
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'title' => 'Pendaftaran',
            'pendaftaran' => $pendaftaran
        ];
        return view('dashboard-admin/detail_data_pendaftar', $data);
    }

}
