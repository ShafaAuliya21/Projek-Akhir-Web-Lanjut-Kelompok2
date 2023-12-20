<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table            = 'pendaftaran';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'npm', 'angkatan', 'jenis_seminar', 'judul', 'jurusan', 'fakultas',
    'lokasi', 'waktu', 'creator', 'dosen_id', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function savePendaftaran($data){
        $this->insert($data);
    }

    public function getPendaftaran($id = null){
        if($id != null){
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updatePendaftaran($data, $id){
        return $this->update($id, $data);
    }

    public function deletePendaftaran($id){
        $pendaftaran = $this->find($id);
        if($pendaftaran){
            $this->db->table('review')->where('id_pendaftaran', $id)->delete();
            return $this->delete($id);
        }
        return false;
    }

    public function getPendaftaranByCreator($id = null){
        return $this->where('creator', $id)->findAll();
    }

    public function getPendaftaranByCreatorFilterStatus($id = null){
        return $this->where('creator', $id)->where('status', 'Terima')->findAll();
    }

    public function getPendaftaranByDosenId($id = null){
        return $this->where('dosen_id', $id)->findAll();
    }

    public function getPendaftaranByDosenIdFilterStatus($id = null){
        return $this->where('dosen_id', $id)->where('status', 'Terima')->findAll();
    }
}