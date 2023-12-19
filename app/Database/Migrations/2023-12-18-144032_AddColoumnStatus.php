<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColoumnStatus extends Migration
{
    public function up()
    {
        $this->forge->addColumn('berkas',[
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('berkas', ['status']);
    }
}
