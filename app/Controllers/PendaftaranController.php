<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;
use App\Models\MahasiswaModel;
use App\Models\PendaftaranModel;

class PendaftaranController extends BaseController
{
    public $mahasiswaModel;
    public $pendaftaranModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->pendaftaranModel = new PendaftaranModel();
    }


    public function index()
    {
        $data = [
            'title' => 'List Pendaftaran',
            'pendaftaran' => $this->pendaftaranModel->getPendaftaranByCreator(user()->id),
        ];
        return view('list_pendaftaran', $data);
    }

    public function pendaftaran()
    {
        $this->pendaftaranModel = new PendaftaranModel();
        $pendaftaran = $this->pendaftaranModel->getPendaftaran();

        if (session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }


        $data = [
            'pendaftaran' => $pendaftaran,
            'validation' => $validation,
            'title' => 'Create Pendaftaran',
            'id_berkas' => $this->request->getPost('id_berkas'),

        ];

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
        $id_berkas = $this->request->getPost('id_berkas');

        //Validation
        if (!$this->validate(
            [
                'nama' => 'required',
                'npm' => 'required',
                'angkatan' => 'required',
                'jenis_seminar' => 'required',
                'judul' => 'required',
                'jurusan' => 'required',
                'fakultas' => 'required',
                'lokasi' => 'required',
                'waktu' => 'required'

            ]

        )) {
            return redirect()->to('/mahasiswa/pendaftaran')->withInput()->with('validation', $this->validator);
        }

        $validation = \Config\Services::validation();

        $data = [
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
            'validation' => $validation,
            'id_berkas' => $id_berkas,
            'id_users' => user()->id,
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
            'deleted_at' =>  date('Y-m-d H:i:s')
        ];

        $this->pendaftaranModel = new PendaftaranModel();
        $this->mahasiswaModel = new MahasiswaModel();

        $this->pendaftaranModel->savePendaftaran($data);
        return redirect()->to('/mahasiswa/list_pendaftaran');
    }

    public function show($id)
    {
        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'title' => 'Pendaftaran',
            'pendaftaran' => $pendaftaran
        ];
        return view('detail_pendaftaran', $data);
    }

    public function edit($id)
    {
        if (session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }

        $pendaftaran = $this->pendaftaranModel->getPendaftaran($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Pendaftaran',
            'pendaftaran' => $pendaftaran
        ];
        return view('edit_pendaftaran', $data);
    }

    public function update($id)
    {
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
        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('mahasiswa/list_pendaftaran'));
    }

    public function destroy($id)
    {
        $result = $this->pendaftaranModel->deletePendaftaran($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/mahasiswa/list_pendaftaran'))->with('success', 'Berhasil menghapus data');
    }
}