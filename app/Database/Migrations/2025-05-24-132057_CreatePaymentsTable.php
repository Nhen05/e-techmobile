<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'auto_increment' => true],
            'order_id'       => ['type' => 'INT', 'null' => false, 'unique' => true],
            'payment_type'   => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => false],
            'transaction_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status'         => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'paid_at'        => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('order_id', 'orders', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}
