<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;

class BerkasadminController extends BaseController
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
        return view('dashboard-admin/list_berkas', $data);
    }

    public function editBerkas($id) {
        if ($this->request->getMethod() === 'post') {
            $status = $this->request->getPost('status');
    
            $validationRules = [
                'status' => 'required|in_list[Diterima,Ditolak]', 
            ];
    
            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
    
            $data = [
                'status' => $status,
            ];
            $updated = $this->berkasModel->update($id, $data);
    
            if ($updated) {
                return redirect()->to('/dashboard-admin/list_berkas')->with('success', 'Status berkas berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Gagal memperbarui status berkas.');
            }
        } else {
            $berkas = $this->berkasModel->find($id);
    
            if (!$berkas) {
                return redirect()->to('/dashboard-admin/list_berkas')->with('error', 'Berkas tidak ditemukan.');
            }
    
            $data = [
                'title' => 'Edit Status Berkas',
                'berkas' => $berkas,
            ];
    
            return view('dashboard-admin/edit_berkas', $data);
        }
    }
    
    public function updateBerkas($id) {
    
        $status = $this->request->getPost('status');
    
        $validationRules = [
            'status' => 'required|in_list[Diterima,Ditolak]', 
        ];
    
        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'status' => $status,
        ];
        $updated = $this->berkasModel->update($id, $data);
    
        if ($updated) {
            return redirect()->to('/dashboard-admin/list_berkas')->with('success', 'Status berkas berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui status berkas.');
        }
    }
    
}