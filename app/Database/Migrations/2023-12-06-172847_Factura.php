<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Factura
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Factura extends Migration{
    
    public function down() {
        $this->forge->dropTable('facturas', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_factura' => [
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
            'id_modo_pago' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'nro_documento' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'null'           => false,
            ],
            'fecha_factura' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
            'total' => [
                'type'           => 'DECIMAL(10,2)',
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id_factura', true, true, 'pk_factura');
        $this->forge->addForeignKey('id_orden', 'ordenes', 'id_orden', 'CASCADE', 'CASCADE', 'fk_factura_orden');
        $this->forge->addForeignKey('id_modo_pago', 'modos_pago', 'id_modo_pago', 'CASCADE', 'CASCADE', 'fk_factura_modo_pago');
        $this->forge->createTable('facturas', true);
    }
}
