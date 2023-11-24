<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTablePendaftaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama'            => ['type' => 'varchar', 'constraint' => 255],
            'npm'         => ['type' => 'int', 'constraint' => 10],
            'angkatan'    => ['type' => 'varchar', 'constraint' => 255],
            'jenis_seminar'       => ['type' => 'varchar', 'constraint' => 255],
            'judul'       => ['type' => 'varchar', 'constraint' => 255],
            'jurusan'       => ['type' => 'varchar', 'constraint' => 255],
            'fakultas'       => ['type' => 'varchar', 'constraint' => 255],
            'lokasi'       => ['type' => 'varchar', 'constraint' => 255],
            'waktu'       => ['type' => 'datetime'],
            'creator'       => ['type' => 'int', 'constraint' => 11],
            'created_at'       => ['type' => 'datetime'],
            'updated_at'       => ['type' => 'datetime'],
            'deleted_at'       => ['type' => 'datetime']
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pendaftaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran', true);
    }
}
