<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;

class BerkasController extends BaseController
{
    public $mahasiswaModel;
    public $berkasModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->berkasModel = new BerkasModel();
    }


    public function index()
    {
        $data=[
            'title' => 'List Berkas',
            'berkas' => $this->berkasModel->getBerkas(),
        ];
        return view('berkas', $data);
    }

    public function berkas(){
        $this->berkasModel = new BerkasModel();
        $berkas = $this->berkasModel->getBerkas();

        // var_dump($berkas);

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $data = [
            'berkas' => $berkas,
            'validation' => $validation,
            'title' => 'Create Berkas',
        ];
        return view('create_berkas', $data);
    }

    public function store()
    {
        $this->berkasModel = new BerkasModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $angkatan = $this->request->getPost('angkatan');

        //Validation
        if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required',
            'angkatan' => 'required',

        ]

        )){
            return redirect()->to('/mahasiswa/create_berkas')->withInput()->with('validation', $this->validator);

        }

        $validation = \Config\Services::validation();

        $data=[
            'nama' => $nama,
            'npm' => $npm,
            'angkatan' => $angkatan,
        ];
        $this->berkasModel = new BerkasModel();
        $this->mahasiswaModel = new MahasiswaModel();

        $this->berkasModel->saveBerkas($data);
        return redirect()->to('/mahasiswa/berkas');
        
    }

    public function edit($id){        
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $berkas = $this->berkasModel->getBerkas($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Berkas',
            'berkas' => $berkas
        ];
        return view('edit_berkas', $data);
        
    }

    public function update($id){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'angkatan' => $this->request->getVar('angkatan'),
            
        ];

        $result = $this->berkasModel->updateBerkas($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('mahasiswa/berkas'));
    }

    public function destroy($id){
        $result = $this->berkasModel->deleteBerkas($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/mahasiswa/berkas'))->with('success', 'Berhasil menghapus data');
    }
}