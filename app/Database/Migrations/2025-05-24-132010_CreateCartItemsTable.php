<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCartItemsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'cart_id'    => ['type' => 'INT'],
            'product_id' => ['type' => 'INT'],
            'quantity'   => ['type' => 'INT', 'default' => 1],
            'price'      => ['type' => 'DECIMAL', 'constraint' => '10,2'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('cart_id', 'carts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cart_items');
    }

    public function down()
    {
        $this->forge->dropTable('cart_items');
    }
}
