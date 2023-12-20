<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\PendaftaranModel;
use App\Models\UserModel;
use App\Models\AdminModel;



class AdminController extends BaseController
{
    public $mahasiswaModel;
    public $pendaftaranModel;
    public $userModel;
    public $adminModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->pendaftaranModel = new PendaftaranModel();
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();

    }


    public function index()
    {
        $data=[
            'title' => 'List Pendaftaran',
            'pendaftaran' => $this->pendaftaranModel->getPendaftaran(),

            'admin' => $this->userModel->getUser(user()->id)

        ];
        return view('dashboard-admin/data_pendaftar', $data);
    }

    public function editProfile($id){        
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $admin = $this->adminModel->getUser($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Profile',
            'admin' => $admin
        ];
        return view('dashboard-admin/edit_profile', $data);
        
    }

    public function updateProfile($id){
        $data = [
            'nama' => $this->request->getVar('nama')
        ];

        // dd($data);

        $result = $this->adminModel->updateUser($data, $id);
        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('admin'));
    }

    public function show($id){
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'title' => 'Pendaftaran',
            'pendaftaran' => $pendaftaran
        ];
        return view('dashboard-admin/detail_data_pendaftar', $data);
    }

}
