<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;
use App\Models\DosenModel;
use App\Models\PendaftaranModel;
use App\Models\JadwalModel;




class DosenController extends BaseController
{
    public $mahasiswaModel;
    public $berkasModel;
    public $dosenModel;
    public $pendaftaranModel;
    public $jadwalModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->berkasModel = new BerkasModel();
        $this->dosenModel = new DosenModel();
        $this->pendaftaranModel = new PendaftaranModel();
        $this->jadwalModel = new JadwalModel();
    }


    public function index()
    {
        $allUser = $this->dosenModel->countAll();
        $data = [
            'user' => $this->dosenModel->getListUser(),
            'alluser' => $allUser,  
        ];
        return view('dashboard-dosen/dashboard-dosen',$data);
    }

    public function listBerkas(){
        $data=[
            'title' => 'List Berkas',
            'berkas' => $this->berkasModel->getBerkas(),
        ];
        return view('dashboard-dosen/list_berkas', $data);
    }

    public function listPendaftaran(){
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $this->pendaftaranModel->getPendaftaran(),
        ];
        return view('dashboard-dosen/list_pendaftaran', $data);
    }

    public function show($id){
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'title' => 'Pendaftaran',
            'pendaftaran' => $pendaftaran
        ];
        return view('dashboard-dosen/detail_data_pendaftar', $data);
    }

    public function getJadwal(){
        $data=[
            'title' => 'List Jadwal',
            'jadwal' => $this->jadwalModel->getJadwal(),
        ];
        return view('dashboard-dosen/jadwal_seminar', $data);
    }

    public function jadwal(){
        $this->jadwalModel = new JadwalModel();
        $jadwal = $this->jadwalModel->getJadwal();

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
        ]

        )){
             
            return redirect()->to('/dosen/bergabung_seminar')->withInput()->with('validation', $this->validator);

        }
        
        $this->jadwalModel = new JadwalModel();
        $nama = $this->request->getPost('nama');       
        $data=[
            'nama' => $nama,
        ];
        $this->jadwalModel = new jadwalModel();
        $this->dosenModel = new DosenModel();

        $this->jadwalModel->saveJadwal($data);
        return redirect()->to('/dosen/gabung');
    }



}