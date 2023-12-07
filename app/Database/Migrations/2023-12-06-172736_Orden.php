<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Orden
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Orden extends Migration{
    
    public function down() {
        $this->forge->dropTable('ordenes', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_orden' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_cliente' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'fecha_orden' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
            'baja' => [
                'type'           => 'BOOLEAN',
                'default'        => false, 
            ],
        ]);
        $this->forge->addKey('id_orden', true, true, 'pk_orden');
        $this->forge->addForeignKey('id_cliente', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE', 'fk_orden_usuario');
        $this->forge->createTable('ordenes', true);
    }
}
