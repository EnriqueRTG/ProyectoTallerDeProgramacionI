<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of HistorialCompra
 *
 * @author Torres Gamarra Enrique Ramon
 */
class HistorialCompra extends Migration{
    
    public function down() {
        $this->forge->dropTable('historiales_compras', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_historial_compra' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_producto' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'fecha_compra' => [
                'type'       => 'DATE',
                'null'       => false,
            ],
            'cantidad' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id_historial_compra', true, true, 'pk_historial_compra');
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE', 'fk_historial_compra_usuario');
        $this->forge->addForeignKey('id_producto', 'productos', 'id_producto', 'CASCADE', 'CASCADE', 'fk_historial_compra_producto');
        $this->forge->createTable('historiales_compras', true);
    }
}
