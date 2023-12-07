<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of MensajeInterno
 *
 * @author Torres Gamarra Enrique Ramon
 */
class MensajeInterno extends Migration{
    
    public function down() {
        $this->forge->dropTable('mensajes_internos', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_mensaje' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_mensaje', true, true, 'pk_mensaje_interno');
        $this->forge->addForeignKey('id_mensaje', 'mensajes', 'id_mensaje', 'CASCADE', 'CASCADE', 'fk_mensaje_interno_mensaje');
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE', 'fk_mensaje_interno_usuario');
        $this->forge->createTable('mensajes_internos', true);
    }
}
