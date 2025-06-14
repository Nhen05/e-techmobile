<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'   => ['type' => 'INT', 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('brands');
    }

    public function down()
    {
        $this->forge->dropTable('brands');
    }
}
