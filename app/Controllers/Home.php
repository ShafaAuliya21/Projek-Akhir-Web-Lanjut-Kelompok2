<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\DosenModel;
// use vendor\myth\auth\src\Controllers\AuthController;

class Home extends BaseController
{
    public $mahasiswaModel;
    public $dosenModel;
    public $userModel;

    public function __construct(){
        $this->mahasiswaModel = new MahasiswaModel();
        $this->dosenModel = new DosenModel();
        $this->userModel = new \Myth\Auth\Models\UserModel();
    }

    public function index()
    {
        if(logged_in()){
            if(in_groups('admin')){
                return redirect()->to(base_url('/admin'));
            }else if(in_groups('mahasiswa')){
                return redirect()->to(base_url('/mahasiswa'));
            }else if(in_groups('dosen')){
                return redirect()->to(base_url('/dosen'));
            }
        }
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

        $allUser = $this->dosenModel->countAll();
        $data = [
            'user' => $this->dosenModel->getListUser(),
            'alluser' => $allUser,  
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
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }
        $user = $this->dosenModel->getUser($id);
        $data = [
            'validation' => $validation,
            'user' => $user,
        ];
        return view('dashboard-admin/edit_dosen', $data);
    }

    public function editmahasiswa($id)
    {
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }
        $user = $this->mahasiswaModel->getUser($id);
        $data = [
            'validation' => $validation,
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

    public function tambahDosen(){
        return view('dashboard-admin/tambah_dosen');
    }

    public function store(){
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'pass_confirm' => $this->request->getVar('pass_confirm'),

        ];
        $user = $this->userModel
        ->withGroup('dosen')
        ->insert($data);
        dd($user);
    }

    public function destroy($id){
        $result = $this->dosenModel->deleteUser($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/admin/dosen'))
        ->with('success', 'Berhasil menghapus data');
    }

    public function dashboardDosen()
    {

        $allUser = $this->dosenModel->countAll();
        $data = [
            'user' => $this->dosenModel->getListUser(),
            'alluser' => $allUser,  
        ];
        return view('dashboard-dosen/dashboard-dosen',$data);
    }
}