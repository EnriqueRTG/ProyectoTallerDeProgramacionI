<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Description of ModoPago
 *
 * @author Torres Gamarra Enrique Ramon
 */
class ModoPago extends Migration{
    
    public function down() {
        $this->forge->dropTable('modos_pago', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_modo_pago' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'       => false,
            ],
            'otros_detalles' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_modo_pago', true, true, 'pk_modo_pago');
        $this->forge->createTable('modos_pago', true);
    }
}
