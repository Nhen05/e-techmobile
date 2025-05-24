<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => ['type' => 'INT', 'auto_increment' => true],
            'name'               => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'              => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true],
            'password'           => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'phone'              => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'address'            => ['type' => 'TEXT', 'null' => true],
            'is_verified'        => ['type' => 'BOOLEAN', 'default' => false],
            'verification_token' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'role_id'            => ['type' => 'INT'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
