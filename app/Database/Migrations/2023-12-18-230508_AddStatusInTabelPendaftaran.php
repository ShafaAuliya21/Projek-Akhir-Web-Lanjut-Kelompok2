<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusInTabelPendaftaran extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pendaftaran',[
            'status' => [
                'type' => 'VARCHAR',
                'null'  => true,
                'constraint' => 255

            ],
        ]);
    }

    public function down()
    {
        //
    }
}
