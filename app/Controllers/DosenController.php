<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;
use App\Models\DosenModel;
use App\Models\PendaftaranModel;
use App\Models\JadwalModel;
use App\Models\ReviewModel;





class DosenController extends BaseController
{
    public $mahasiswaModel;
    public $berkasModel;
    public $dosenModel;
    public $pendaftaranModel;
    public $jadwalModel;
    public $reviewModel;


    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->berkasModel = new BerkasModel();
        $this->dosenModel = new DosenModel();
        $this->pendaftaranModel = new PendaftaranModel();
        $this->jadwalModel = new JadwalModel();
        $this->reviewModel = new ReviewModel();

    }


    public function index()
    {
        $allUser = $this->dosenModel->countAll();
        $dosen = $this->dosenModel->getUser(user()->id);
        $data = [
            'user' => $this->dosenModel->getListUser(),
            'alluser' => $allUser,
            'dosen' => $dosen  
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
            'pendaftaran' => $this->pendaftaranModel->getPendaftaranByDosenId(user()->id),
        ];
        return view('dashboard-dosen/list_pendaftaran', $data);
    }

    // public function review(){
    //     $pendaftaran = $this->pendaftaranModel->getPendaftaranByDosenId(user()->id);
    //     $idPendaftaran = ($pendaftaran[0]['id']);
    //     // dd($idPendaftaran);
    //     // dd($idPendaftaran);
    //     $data=[
    //         'title' => 'List Pendaftaran',
    //         'pendaftaran' => $pendaftaran,
    //         'review' => $this->reviewModel->getReviewByPendaftaranId($idPendaftaran)
    //     ];
    //     dd($data);
    //     return view('dashboard-dosen/review', $data);
    // }

    public function review(){
        $pendaftaran = $this->pendaftaranModel->getPendaftaranByDosenIdFilterStatus(user()->id);
        // $idPendaftaran = ($pendaftaran[0]['id']);
        // dd($idPendaftaran);  
        // dd($idPendaftaran);
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $pendaftaran,
            'reviews' => []
        ];
        foreach ($pendaftaran as $pendaftaranItem) {
            if($pendaftaranItem['status'] == null){
                continue;
            }else{
                $review = $this->reviewModel->getReviewByPendaftaranId($pendaftaranItem['id']);
                $data['reviews'][$pendaftaranItem['id']] = $review;
            }
        }
        // dd($data);
        return view('dashboard-dosen/review', $data);
    }

//     public function review()
// {
//     $pendaftaran = $this->pendaftaranModel->getPendaftaranByDosenId(user()->id);

//     $data = [
//         'title' => 'List Pendaftaran',
//         'pendaftaran' => $pendaftaran,
//         'review' => []
//     ];

//     foreach ($pendaftaran as $pendaftaranItem) {
//         $review = $this->reviewModel->getReviewByPendaftaranId($pendaftaranItem['id']);
        
//         $data['review'][] = $review;
//     }

//     // dd($data);

//     return view('dashboard-dosen/review', $data);
// }


//     public function review()
// {
//     // Ambil data pendaftaran berdasarkan id dosen
//     $pendaftaran = $this->pendaftaranModel->getPendaftaranByDosenId(user()->id);

//     // Inisialisasi array untuk menyimpan data pendaftaran dan review
//     $data = [];

//     // Looping untuk setiap pendaftaran
//     foreach ($pendaftaran as $pendaftaranItem) {
//         // Ambil data review berdasarkan id pendaftaran
//         $review = $this->reviewModel->getReviewByPendaftaranId($pendaftaranItem['id']);

//         // Gabungkan data pendaftaran dan review dalam array
//         $data[] = [
//             'pendaftaran' => $pendaftaranItem,
//             'review' => $review,
//         ];
//     }

//     // Kirim data ke view
//     $dataToSend = [
//         'title' => 'List Pendaftaran',
//         'data' => $data,  // Data pendaftaran dan review
//     ];

//     return view('dashboard-dosen/review', $dataToSend);
// }


    public function show($id){
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);
        $dosen = $this->dosenModel->find($pendaftaran['dosen_id']);

        $data = [
            'title' => 'Pendaftaran',
            'pendaftaran' => $pendaftaran,
            'dosen' => $dosen

        ];
        return view('dashboard-dosen/detail_data_pendaftar', $data);
    }

    public function edit($id){        
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Pendaftaran',
            'pendaftaran' => $pendaftaran
        ];
        return view('dashboard-dosen/edit_data_pendaftar', $data);
        
    }

    public function update($id){
        $data = [
            'npm' => $this->request->getVar('npm'),
            'angkatan' => $this->request->getVar('angkatan'),
            'jenis_seminar' => $this->request->getVar('jenis_seminar'),
            'judul' => $this->request->getVar('judul'),
            'jurusan' => $this->request->getVar('jurusan'),
            'fakultas' => $this->request->getVar('fakultas'),
            'lokasi' => $this->request->getVar('lokasi'),
            'waktu' => $this->request->getVar('waktu'),
            'status' => $this->request->getVar('status'),
            
        ];

        // dd($data);

        $result = $this->pendaftaranModel->updatePendaftaran($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('dosen/list_pendaftaran'));
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

    public function setReview($id){        
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'validation' => $validation,
            'title' => 'Review',
            'pendaftaran' => $pendaftaran
        ];
        return view('dashboard-dosen/set_review', $data);
        
    }

    public function saveReview($id)
    {
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);
        $nilai = $this->request->getPost('nilai');
        $kritik_saran = $this->request->getPost('kritik_saran');


        //Validation
        if(!$this->validate([
            'nilai' => 'required',
            'kritik_saran' => 'required'


        ]

        )){
            return redirect()->to('/dosen/review')->withInput()->with('validation', $this->validator);

        }

        $validation = \Config\Services::validation();

        $data=[
            'nilai' => $nilai,
            'kritik_saran' => $kritik_saran,
            'id_pendaftaran' => $pendaftaran['id'],
            'creator' => user()->id,
            'validation' => $validation
        ];

        $this->reviewModel->saveReview($data);
        return redirect()->to('/dosen/review');
        
    }

    public function editProfile($id){        
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $dosen = $this->dosenModel->getUser($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Profile',
            'dosen' => $dosen
        ];
        return view('dashboard-dosen/update_profile', $data);
        
    }

    public function updateProfile($id){
        $data = [
            'nama' => $this->request->getVar('nama')
        ];

        // dd($data);

        $result = $this->dosenModel->updateUser($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('dosen'));
    }


}