<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVouchersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'auto_increment' => true],
            'code'           => ['type' => 'VARCHAR', 'constraint' => 50, 'unique' => true],
            'discount_type'  => ['type' => 'ENUM', 'constraint' => ['percent', 'fixed']],
            'discount_value' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'min_order_value'=> ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => true],
            'expires_at'     => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vouchers');
    }

    public function down()
    {
        $this->forge->dropTable('vouchers');
    }
}
