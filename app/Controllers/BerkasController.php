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
            'berkas' => $this->berkasModel->getBerkasByCreator(user()->id),
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

        // dd($validation);

        $data = [
            'berkas' => $berkas,
            'validation' => $validation,
            'title' => 'Create Berkas',
        ];
        return view('create_berkas', $data);
    }

    public function store()
    {

         //Validation
         if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required',
            'angkatan' => 'required',
        ]

        )){
             
            return redirect()->to('/mahasiswa/create_berkas')->withInput()->with('validation', $this->validator);

        }
        
        $path = 'assets/file/';
        $file = $this->request->getFile('file');
        $name = $file->getRandomName();
        if ($file->move($path, $name)){
            $file = base_url($path . $name);
        }

        $this->berkasModel = new BerkasModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $angkatan = $this->request->getPost('angkatan');

       
        $data=[
            'nama' => $nama,
            'npm' => $npm,
            'angkatan' => $angkatan,
            'file' => $file,
            'creator' => user()->id,
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
        $path = 'assets/file/';
        $file = $this->request->getFile('file');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'angkatan' => $this->request->getVar('angkatan'),
            'status' => $this->request->getVar('status'),
            
        ];

        if ($file->isValid()){
            $name = $file->getRandomName();

            if ($file->move($path, $name)){
                $file_path = base_url($path . $name);
            }
        }

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