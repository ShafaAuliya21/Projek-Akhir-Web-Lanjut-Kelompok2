<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\PendaftaranModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\DosenModel;
use App\Models\UsersGroupsModel;





class AdminController extends BaseController
{
    public $mahasiswaModel;
    public $pendaftaranModel;
    public $userModel;
    public $adminModel;
    public $dosenModel;
    public $usersGroupsModel;



    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->pendaftaranModel = new PendaftaranModel();
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();
        $this->dosenModel = new DosenModel();
        $this->usersGroupsModel = new UsersGroupsModel();



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

    // public function getListUser(){
    //     $allUser = $this->dosenModel->countAll();
    //     $user = $this->adminModel->getUser();
    //     $admin = $this->usersGroupsModel->getGroupsUsersAdmin();
    //     $dosen = $this->usersGroupsModel->getGroupsUsersDosen();
    //     $mahasiswa = $this->usersGroupsModel->getGroupsUsersMahasiswa();
    //     // dd($user);
    //     // dd($admin);
    //     // dd($dosen);
    //     $i = 0;
    //     dd($user);
    //     foreach($user as $data){
    //         dd($data);
    //         if($data['id'] == $admin[0]['user_id']){
    //             $user[$i]['name'] = 'admin';
    //         }else if($data['id'] == $dosen[0]['user_id']){
    //             $user[$i]['name'] = 'dosen';
    //         }else if($data['id'] == $mahasiswa[0]['user_id']){
    //             $user[$i]['name'] = 'mahasiswa';
    //         }else{
    //         }
    //         $i++;
    //     }
        
    //     $data = [
    //         'user' => $user,
    //         'alluser' => $allUser,
    //         'admin' => $this->adminModel->getUser(user()->id)
  
    //     ];
        

    //     // dd($data);
    //     return view('dashboard-admin/kelola_akun',$data);

    // }

    // public function kelola($id){        
    //     if(session('validation')!=null){
    //         $validation = session('validation');
    //     }
    //     else{
    //         $validation = \Config\Services::validation();
    //     }

    //     $user = $this->adminModel->getUser($id);

    //     $data = [
    //         'validation' => $validation,
    //         'title' => 'Set Akun',
    //         'user' => $user
    //     ];
    //     return view('dashboard-admin/set_role', $data);        
    // }

    // public function setAkun($id){
    //     $data = [
    //         'group_id' => $this->request->getVar('akun'),
    //         'user_id' => $id
    //     ];

    //     $result = $this->usersGroupsModel->saveData($data);
    //     if(!$result){
    //         return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
    //     }

    //     return redirect()->to(base_url('admin/akun'));
    // }

}
