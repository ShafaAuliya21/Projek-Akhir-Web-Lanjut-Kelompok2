<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'   => true,
            ],

            'id_pendaftaran' => [
                'type' => 'INT',
                'contraint' => 5,
                'unsigned' => true,
            ],

            'id_users' => [
                'type' => 'INT',
                'contraint' => 5,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_users', 'users', 'id');
        $this->forge->addForeignKey('id_pendaftaran', 'pendaftaran', 'id');
        $this->forge->createTable('jadwal', true);
    }

    public function down()
    {
        $this->forge->dropTable('jadwal', true);
    }
}
