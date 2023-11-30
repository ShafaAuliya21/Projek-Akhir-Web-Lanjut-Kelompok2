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
        $data=[
            'title' => 'List Jadwal',
            'jadwal' => $this->jadwalModel->getJadwal(),
        ];
        return view('jadwal_seminar', $data);
    }

    public function jadwal($id){ 
        $this->jadwalModel = new JadwalModel();
        $jadwal = $this->jadwalModel->getJadwal($id);

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $data = [
            'jadwal' => $jadwal,
            'validation' => $validation,
            'title' => 'Bergabung Seminar',
        ];
        return view('bergabung_seminar', $data);
    }

    public function store()
    {
         //Validation
         if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required',

        ]

        )){
             
            return redirect()->to('/mahasiswa/bergabung_seminar')->withInput()->with('validation', $this->validator);

        }
        
        $this->jadwalModel = new JadwalModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
       
        $data=[
            'nama' => $nama,
            'npm' => $npm,
        ];
        $this->jadwalModel = new jadwalModel();
        $this->mahasiswaModel = new MahasiswaModel();

        $this->jadwalModel->saveJadwal($data);
        return redirect()->to('/mahasiswa/gabung');
    }

}