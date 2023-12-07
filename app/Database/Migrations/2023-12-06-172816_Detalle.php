<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Detalle
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Detalle extends Migration{
    
    public function down() {
        $this->forge->dropTable('detalles', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_detalle' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_orden' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_producto' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'cantidad' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null'           => false,
            ],
            'sub_total' => [
                'type'           => 'DECIMAL(10,2)',
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id_detalle', true, true, 'pk_detalle');
        $this->forge->addForeignKey('id_orden', 'ordenes', 'id_orden', 'CASCADE', 'CASCADE', 'fk_detalle_orden');
        $this->forge->addForeignKey('id_producto', 'productos', 'id_producto', 'CASCADE', 'CASCADE', 'fk_detalle_producto');
        $this->forge->createTable('detalles', true);
    }
}

