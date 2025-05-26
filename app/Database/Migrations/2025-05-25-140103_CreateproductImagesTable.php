<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateproductImagesTable extends Migration
{
public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'auto_increment' => true,
        ],
        'product_id' => [
            'type'       => 'INT',
            'constraint' => 11,
            // Không để 'unsigned' nếu products.id không unsigned
        ],
        'image_url' => [
            'type'       => 'VARCHAR',
            'constraint' => 255,
        ],
        'is_main' => [
            'type'       => 'BOOLEAN',
            'default'    => false,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('product_images');
}

public function down()
{
    $this->forge->dropTable('product_images');
}

}
