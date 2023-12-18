<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\DosenModel;
use App\Models\PendaftaranModel;
use App\Models\UsersGroupsModel;


class PendaftaranController extends BaseController
{
    public $mahasiswaModel;
    public $pendaftaranModel;
    public $usersGroupsModel;
    public $dosenModel;
    

    
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->pendaftaranModel = new PendaftaranModel();
        $this->usersGroupsModel = new UsersGroupsModel();
        $this->dosenModel = new DosenModel();

    }


    public function index()
    {
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $this->pendaftaranModel->getPendaftaranByCreator(user()->id),

        ];
        return view('list_pendaftaran', $data);
    }

    public function pendaftaran(){
        
        $this->pendaftaranModel = new PendaftaranModel();
        $pendaftaran = $this->pendaftaranModel->getPendaftaran();

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $list_dosen = $this->usersGroupsModel->getGroupsUsers();
        $dosen = $this->dosenModel->getUser();
        $dosenList = [];
        foreach($list_dosen as $list_dosen){
            $dosen = $this->dosenModel->find($list_dosen['user_id']);
            $dosenList[] = $dosen;
        }

        // $dosen = array();
        // foreach($list_dosen as $list_dosen){
        //     array_push($dosen, $this->dosenModel->where('id', $list_dosen['user_id'])->findAll());
        // }
        // $dosen = array($this->dosenModel);
        //     foreach($list_dosen as $list_dosen){
        //         array_push($dosen, $this->dosenModel->where('id', $list_dosen['user_id'])->findAll());
        //     }
            // $dosen = $this->dosenModel->getUser($list_dosen['user_id']);

        $data = [
            'pendaftaran' => $pendaftaran,
            'validation' => $validation,
            'title' => 'Create Pendaftaran',
            'dosen' => $dosen,
            'list_dosen' => $list_dosen,
            'dosen_list' => $dosenList
        ];
            // dd($data);
        return view('pendaftaran', $data);
    }

    public function store()
    {
        $this->pendaftaranModel = new PendaftaranModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $angkatan = $this->request->getPost('angkatan');
        $jenis_seminar = $this->request->getPost('jenis_seminar');
        $judul = $this->request->getPost('judul');
        $jurusan = $this->request->getPost('jurusan');
        $fakultas = $this->request->getPost('fakultas');
        $lokasi = $this->request->getPost('lokasi');
        $waktu = $this->request->getPost('waktu');
        $dosen = $this->request->getPost('dosen');

        //Validation
        if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required',
            'angkatan' => 'required',
            'jenis_seminar' => 'required',
            'judul' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required',
            'dosen' => 'required'

        ]

        )){
            return redirect()->to('/mahasiswa/pendaftaran')->withInput()->with('validation', $this->validator);

        }

        $validation = \Config\Services::validation();

        $data=[
            'nama' => $nama,
            'npm' => $npm,
            'angkatan' => $angkatan,
            'jenis_seminar' => $jenis_seminar,
            'judul' => $judul,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas,
            'lokasi' => $lokasi,
            'waktu' => $waktu,
            'creator' => user()->id,
            'dosen_id' => $dosen,
            'validation' => $validation
        ];
        $this->pendaftaranModel = new PendaftaranModel();
        $this->mahasiswaModel = new MahasiswaModel();

        $this->pendaftaranModel->savePendaftaran($data);
        return redirect()->to('/mahasiswa/list_pendaftaran');
        
    }

    public function show($id){
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);
        $dosen = $this->dosenModel->find($pendaftaran['dosen_id']);

        $data = [
            'title' => 'Pendaftaran',
            'pendaftaran' => $pendaftaran,
            'dosen' => $dosen
        ];
        return view('detail_pendaftaran', $data);
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
        // dd($data);
        return view('edit_pendaftaran', $data);
        
    }

    public function update($id){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'angkatan' => $this->request->getVar('angkatan'),
            'jenis_seminar' => $this->request->getVar('jenis_seminar'),
            'judul' => $this->request->getVar('judul'),
            'jurusan' => $this->request->getVar('jurusan'),
            'fakultas' => $this->request->getVar('fakultas'),
            'lokasi' => $this->request->getVar('lokasi'),
            'waktu' => $this->request->getVar('waktu'),
            
        ];

        $result = $this->pendaftaranModel->updatePendaftaran($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('mahasiswa/list_pendaftaran'));
    }

    public function destroy($id){
        $result = $this->pendaftaranModel->deletePendaftaran($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/mahasiswa/list_pendaftaran'))->with('success', 'Berhasil menghapus data');
    }
}
