<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\DosenModel;
// use vendor\myth\auth\src\Controllers\AuthController;

class Home extends BaseController
{
    public $mahasiswaModel;
    public $dosenModel;

    public function __construct(){
        $this->mahasiswaModel = new MahasiswaModel();
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        return view('landing_page');

        
    }

    public function signin()
    {
        return view('auth/sign_in');
    }
    
    public function signup()
    {
        return view('auth/sign_up');
    }
    public function dashboard()
    {
        $data = [
            'user' => $this->dosenModel->getListUser(),
        ];
        return view('dashboard-admin/dashboard',$data);
    }

    public function mahasiswa()
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa(),
        ];
        
        return view('dashboard-admin/mahasiswa',$data);
    }

    public function dosen()
    {
        $data = [
            'dosen' => $this->dosenModel->getDosen(),
        ];
        
        return view('dashboard-admin/dosen',$data);
    }

    public function editdosen($id)
    {
        $user = $this->dosenModel->getUser($id);
        $data = [
            'user' => $user,
        ];
        return view('dashboard-admin/edit_dosen', $data);
    }

    public function editmahasiswa($id)
    {
        $user = $this->mahasiswaModel->getUser($id);
        $data = [
            'user' => $user,
        ];
        return view('dashboard-admin/edit_mahasiswa', $data);
    }

    public function updateDosen($id)
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/admin/' . $id . '/editDosen'))->withInput()->with('validation', $validation);
        }
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
        ];
        $result = $this->dosenModel->updateUser($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/admin/dosen'));
    }

    public function updateMahasiswa($id)
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/admin/' . $id . '/editMahasiswa'))->withInput()->with('validation', $validation);
        }
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
        ];
        $result = $this->mahasiswaModel->updateUser($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal mengubah data');
        }

        return redirect()->to(base_url('/admin/mahasiswa'));
    }

    public function berkas(){
        return view('berkas');
    }

    public function createberkas(){
        return view('create-berkas');
    }
}