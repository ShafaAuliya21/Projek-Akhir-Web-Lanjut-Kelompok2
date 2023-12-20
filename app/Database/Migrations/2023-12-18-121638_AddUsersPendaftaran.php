<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsersPendaftaran extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pendaftaran', [
            'id_users' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
        ]);
        
        $this->forge->addForeignKey('id_users', 'users', 'id');
        
    }

    public function down()
    {
        $this->forge->dropColumn('pendaftaran', ['id_users']);
    }
}