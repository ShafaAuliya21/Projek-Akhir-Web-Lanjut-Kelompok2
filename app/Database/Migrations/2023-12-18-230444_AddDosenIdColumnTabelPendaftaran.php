<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDosenIdColumnTabelPendaftaran extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pendaftaran',[
            'dosen_id' => [
                'type' => 'INT',
                'unsigned'=> true,

            ],
        ]);
        $this->forge->addForeignKey('dosen_id', 'pendaftaran', 'id');

    }

    public function down()
    {
        $this->forge->dropColumn('pendaftaran', ['dosen_id']);
    }
}
