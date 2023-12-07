<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of MensajeExterno
 *
 * @author Torres Gamarra Enrique Ramon
 */
class MensajeExterno extends Migration{
    
    public function down() {
        $this->forge->dropTable('mensajes_externos', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_mensaje' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
        ]);
        $this->forge->addKey('id_mensaje', true, true, 'pk_mensaje_externo');
        $this->forge->addForeignKey('id_mensaje', 'mensajes', 'id_mensaje', 'CASCADE', 'CASCADE', 'fk_mensaje_externo');
        $this->forge->createTable('mensajes_externos', true);
    }
}
