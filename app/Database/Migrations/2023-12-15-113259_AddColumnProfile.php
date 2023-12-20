<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnProfile extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users',[
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
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', ['nama','npm','angkatan','prodi']);
    }

}

