<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'user_id'     => ['type' => 'INT'],
            'voucher_id'  => ['type' => 'INT', 'null' => true],
            'status'      => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'pending'],
            'total_price' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
           'created_at' => ['type' => 'DATETIME', 'null' => true],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('voucher_id', 'vouchers', 'id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
