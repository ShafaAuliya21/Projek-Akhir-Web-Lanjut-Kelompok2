<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGroupsUsersColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('auth_groups_users',[
            'updated_at' => [
                'type' => 'DATETIME'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('auth_groups_users', ['updated_at']);
    }
}
