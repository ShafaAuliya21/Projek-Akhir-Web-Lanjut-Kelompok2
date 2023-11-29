<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormBerkas extends Migration
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

            'nama' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],

            'npm' => [
                'type'              => 'VARCHAR',
                'constraint'        => '10',
            ],

            'angkatan' => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'creator'       => [
                'type' => 'int', 
                'constraint' => 11
            ],

            'created_at' => [
                'type' => "DATETIME",
                'null' => true,
            ],
            'updated_at' => [
                'type' =>'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' =>'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('berkas', true);
    }

    public function down()
    {
        $this->forge->dropTable('berkas', true);
    }
}
