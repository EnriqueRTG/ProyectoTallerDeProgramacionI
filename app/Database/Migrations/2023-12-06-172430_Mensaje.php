<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Mensaje
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Mensaje extends Migration{
    
    public function down() {
        $this->forge->dropTable('mensajes', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_mensaje' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'asunto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'consulta' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'fecha_mensaje' => [
                'type'       => 'DATETIME',
                'null'       => false,
            ],
            'leido' => [
                'type'       => 'BOOLEAN',
                'default' => false, 
            ],
        ]);
        $this->forge->addKey('id_mensaje', true, true, 'pk_mensaje');
        $this->forge->createTable('mensajes', true);
    }
}
