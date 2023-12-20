<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;
use App\Models\MahasiswaModel;

class JadwalController extends BaseController
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
        $jadwal = (new JadwalModel())->where('id_users !=', user()->id)->findAll();

        $data=[
            'title' => 'List Jadwal',
            'jadwal' => ($jadwal) ? $jadwal : [],
        ];


        return view('jadwal_seminar', $data);
    }

    public function jadwal($id){  

        $jadwal = $this->jadwalModel->find($id);
        // dd($jadwal);

        $data = [
            'id_pendaftar' => $id,
            'jadwal' => $jadwal,
            'title' => 'Bergabung Seminar',
        ];
        return view('bergabung_seminar', $data);
    }

    public function bergabungSeminar($idPendaftaran)
    {
        $idUsers = session()->get('id_users');

        $data = array(
            'id_users' => user_id(),
            'id_pendaftaran' => $idPendaftaran,
        );

        $this->jadwalModel->simpanDataBergabung($data);

        return view('bergabung_seminar');
    }

}