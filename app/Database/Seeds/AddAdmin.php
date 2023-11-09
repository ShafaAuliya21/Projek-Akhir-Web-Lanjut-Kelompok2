<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \Datetime;

class AddAdmin extends Seeder
{
    public function run()
    {
        $date = new DateTime();
        $date->format('Y-m-d H:i:sP');
        $data = [
            'id' => 1,
            'email'    => 'admin@gmail.com',
            'username' => 'admin',
            'password_hash' => '$2y$10$pUzSm9slcEcD6SyOHYFDy.wv384NqcNhqepFAWnKrhq0Z5u1FZZgq',
            'active' => 1,
            'force_pass_reset' => 0,
            'created_at' => $date->format('Y-m-d H:i:sP'),
            'updated_at' => $date->format('Y-m-d H:i:sP')

        ];
        $this->db->table('users')->insert($data);
    }
}
