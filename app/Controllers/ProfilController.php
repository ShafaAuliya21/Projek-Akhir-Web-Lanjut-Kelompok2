<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;


class ProfilController extends BaseController
{
    public $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        return view('profile-mahasiswa');
    }


    // public function edit(){
    //     $id = user()->id;
    // }

    public function edit($id){

        $profil = $this->mahasiswaModel->getUser($id);

        $data = [
            'profil' => $profil,
        ];

        return view('edit_profil_mhs', $data);
        // return view('edit_profile_mhs', $data);

    }

    public function update(){

        $id = user()->id;

        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'angkatan' => $this->request->getVar('angkatan'),
            'prodi' => $this->request->getVar('prodi'),
        ];

        $result = $this->mahasiswaModel->updateUser($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('mahasiswa/profil'));

    }

}

