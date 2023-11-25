<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFileColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('berkas',[
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('berkas', ['file']);
    }
}