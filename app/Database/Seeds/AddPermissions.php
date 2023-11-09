<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddPermissions extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'manage-users',
            'description'    => 'Manage All Users'
        ];
        $this->db->table('auth_permissions')->insert($data);
        $data = [
            'name' => 'manage-profile',
            'description'    => 'Manage Users Profile'
        ];
        $this->db->table('auth_permissions')->insert($data);
    }
}
