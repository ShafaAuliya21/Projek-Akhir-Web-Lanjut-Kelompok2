<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddGroupRole extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'admin',
            'description'    => 'Site Admin'
        ];
        $this->db->table('auth_groups')->insert($data);
        $data = [
            'name' => 'mahasiswa',
            'description'    => 'Mahasiswa'
        ];
        $this->db->table('auth_groups')->insert($data);
        $data = [
            'name' => 'dosen',
            'description'    => 'Dosen'
        ];
        $this->db->table('auth_groups')->insert($data);
    }
}
