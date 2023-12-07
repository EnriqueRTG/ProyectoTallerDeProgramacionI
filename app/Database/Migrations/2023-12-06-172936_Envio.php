<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Envio
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Envio extends Migration{
    
    public function down() {
        $this->forge->dropTable('envios', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_envio' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_factura' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_estado' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'fecha_envio' => [
                'type'           => 'DATE',
                'null'           => false,
            ],
            'direccion' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id_envio', true, true, 'pk_envio');
        $this->forge->addForeignKey('id_factura', 'facturas', 'id_factura', 'CASCADE', 'CASCADE', 'fk_envio_factura');
        $this->forge->addForeignKey('id_estado', 'estados', 'id_estado', 'CASCADE', 'CASCADE', 'fk_envio_estado');
        $this->forge->createTable('envios', true);
    }
}
