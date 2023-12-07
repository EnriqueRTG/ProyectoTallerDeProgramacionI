<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Description of Productos
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Productos extends Migration {

    public function down() {
        $this->forge->dropTable('productos', true, true);
        // Produces: DROP TABLE IF EXISTS `productos` CASCADE
        // Execute a DROP TABLE statement and optionally add an IF EXISTS clause. A third parameter can be passed to add a CASCADE option, which might be required for some drivers to handle removal of tables with foreign keys.
    }

    public function up() {
        $this->forge->addField([
            'id_producto' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'         => true,
                'null'           => false,
            ],
            'descripcion' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'precio' => [
                'type'           => 'DECIMAL(9,2)',
                'null'           => false,
                'default'        => 0.00,
            ],
            'stock' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'           => false,
                'default'        => 1,
            ],
            'imagen' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true
            ],
            'id_categoria' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'baja' => [
                'type' => 'BOOLEAN',
                'default' => false, 
            ],
        ]);
        $this->forge->addKey('id_producto', true, true, 'pk_producto');
        // gives PRIMARY UNIQUE KEY `pk_producto` (`id_producto`)
        // The optional second parameter set to true will make it a primary key and the third parameter set to true will make it a unique key. You may specify a name with the fourth parameter.
        $this->forge->addForeignKey('id_categoria', 'categorias', 'id_categoria', 'CASCADE', 'CASCADE', 'fk_producto_categoria'  );
        // gives CONSTRAINT 'fk_producto_categoria' FOREIGN KEY('id_categoria') REFERENCES 'categorias'('id_categoria') ON DELETE CASCADE ON UPDATE CASCADE
        $this->forge->createTable('productos', true);
        // creates table only if table does not exist
    }
}
