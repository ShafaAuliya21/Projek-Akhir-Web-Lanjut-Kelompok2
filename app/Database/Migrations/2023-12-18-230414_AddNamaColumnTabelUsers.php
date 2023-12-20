<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNamaColumnTabelUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users',[
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
