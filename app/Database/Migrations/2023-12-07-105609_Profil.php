<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
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

            'id_user'    => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],

            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'username' => [

                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

            'npm'        => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],

            'angkatan'        => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],


            'prodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->createTable('profil');
}

public function down(){
        $this->forge->dropTable('profil');

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_user', 'users', 'id');

        $this->forge->createTable('profil');
}

    // public function down()
    // {
    //     $this->forge->dropTable('profil');
    // }
}

