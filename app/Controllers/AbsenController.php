<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AbsenModel;

class AbsenController extends BaseController
{

    public $absenModel;

    public function __construct()
    {
        $this->absenModel = new AbsenModel();
    }
    public function index()
    {
        return view('form_absensi');
    }

    public function saveAbsen(){
        
        $id_user = user_id();

        $this->absenModel->saveAbsen([
            'id_pendaftar' => $this->request->getVar('id_pendaftar'),
            'id_user' => $id_user,
        ]);

        return redirect()->to(base_url('/mahasiswa/jadwal_seminar'));
    }

    public function getAbsensi($id){

        $list = $this->absenModel->getAbsensi($id);

        $data=[
            'list' => $list,
        ];

        return view('dashboard-admin/list-absensi',$data);

    }

    
}
