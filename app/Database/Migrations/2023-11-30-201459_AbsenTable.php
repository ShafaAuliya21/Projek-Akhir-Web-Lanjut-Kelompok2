<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AbsenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pendaftar' =>[
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
            ],

            'id_user'    => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],

            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'npm'        => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],

            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_pendaftar', 'pendaftaran', 'id');
        $this->forge->addForeignKey('id_user', 'users', 'id');

        $this->forge->createTable('absen');
    }

    public function down()
    {
        $this->forge->dropTable('absen');
    }
}
