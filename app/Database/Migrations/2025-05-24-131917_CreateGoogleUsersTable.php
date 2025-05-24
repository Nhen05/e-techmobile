<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGoogleUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'user_id'   => ['type' => 'INT'],
            'google_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'unique' => true],
            'email'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'avatar'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('google_users');
    }

    public function down()
    {
        $this->forge->dropTable('google_users');
    }
}
