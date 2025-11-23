<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'null'          => false,    
            ],
            'product_description' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => false,    
            ],
             'price' => [
                'type'           => 'DECIMAl',
                'constraint'     => 10,2,
                'unsigned'       => true,
                'null'          => false,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'Coffee',
                'null'       => false,
            ],
            'product_image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

         $this->forge->addKey('id', true); 
         $this->forge->addUniqueKey('product_name'); 
         $this->forge->createTable('products', true);
    }

    public function down()
    {
        $this->forge->dropTable('products', true);
    }
}
