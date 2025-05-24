<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateShippingAddressesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'auto_increment' => true],
            'user_id'   => ['type' => 'INT', 'null' => false],
            'order_id'  => ['type' => 'INT', 'null' => false],
            'full_name' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false],
            'phone'     => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'address'   => ['type' => 'TEXT', 'null' => false],
            'city'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'district'  => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'ward'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('order_id', 'orders', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('shipping_addresses');
    }

    public function down()
    {
        $this->forge->dropTable('shipping_addresses');
    }
}
