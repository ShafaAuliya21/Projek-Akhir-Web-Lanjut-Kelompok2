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
        $mahasiswa = $this->mahasiswaModel->getUser(user()->id);
        $dataAllBerkas = $this->berkasModel->countBerkasByCreator(user()->id);
        $dataAllPendaftaran = $this->pendaftaranModel->countPendaftaranByCreator(user()->id);
        $dataPendaftaran = $this->pendaftaranModel->get()->getResultArray();


        $data =[
            'mahasiswa' => $mahasiswa,
            'title'             => 'User',
            'dataAllBerkas'     => $dataAllBerkas,
            'dataAllPendaftaran' => $dataAllPendaftaran,
            'dataPendaftaran'   => $dataPendaftaran,
              ];
        return view('dashboard-mahasiswa', $data);
    }

    public function review(){
        $pendaftaran = $this->pendaftaranModel->getPendaftaranByCreatorFilterStatus(user()->id);
        // $idPendaftaran = ($pendaftaran[0]['id']);
        // dd($idPendaftaran);
        // dd($idPendaftaran);
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $pendaftaran,
            'reviews' => []
        ];
        foreach ($pendaftaran as $pendaftaranItem) {
            $review = $this->reviewModel->getReviewByPendaftaranId($pendaftaranItem['id']);
            $data['reviews'][$pendaftaranItem['id']] = $review;
            
        }
        // dd($data);
        // dd($data);
        return view('review_mahasiswa', $data);
    }

    public function editProfile($id){        
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $mahasiswa = $this->mahasiswaModel->getUser($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Profile',
            'mahasiswa' => $mahasiswa
        ];
        return view('update_profile', $data);
        
    }

    public function updateProfile($id){
        $data = [
            'nama' => $this->request->getVar('nama')
        ];

        // dd($data);

        $result = $this->mahasiswaModel->updateUser($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('mahasiswa'));
    }

    public function show($id){

        $pendaftaran = $this->pendaftaranModel->getPendaftaranByCreatorFilterStatus(user()->id);
        // $idPendaftaran = ($pendaftaran[0]['id']);
        // dd($idPendaftaran);
        // dd($idPendaftaran);
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $pendaftaran,
            'reviews' => []
        ];
        foreach ($pendaftaran as $pendaftaranItem) {
            $review = $this->reviewModel->getReviewByPendaftaranId($pendaftaranItem['id']);
            $data['reviews'][$pendaftaranItem['id']] = $review;
        }
        return view('detail_kritik_saran', $data);
    }
}
