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
    protected $allowedFields    = [
        'nama', 'npm', 'angkatan', 'jenis_seminar', 'judul', 'jurusan', 'fakultas',
        'lokasi', 'waktu', 'creator', 'id_berkas', 'created_at', 'updated_at', 'deleted_at', 'id_users'
    ];

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

    public function savePendaftaran($data)
    {
        $this->insert($data);
    }

    public function getPendaftaran($id = null)
    {
        if ($id != null) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updatePendaftaran($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deletePendaftaran($id)
    {
        return $this->delete($id);
    }

    public function getPendaftaranByCreator($id = null)
    {
        return $this->where('creator', $id)->findAll();
    }

    public function countPendaftaranByCreator($creatorId){
        return $this->where('creator', $creatorId)->countAllResults();
    }
}
