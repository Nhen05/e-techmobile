<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderLogsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'order_id'   => ['type' => 'INT'],
            'status'     => ['type' => 'VARCHAR', 'constraint' => 50],
            'note'       => ['type' => 'TEXT', 'null' => true],
            'changed_at' => ['type' => 'DATETIME', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('order_id', 'orders', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('order_logs');
    }

    public function down()
    {
        $this->forge->dropTable('order_logs');
    }
}
