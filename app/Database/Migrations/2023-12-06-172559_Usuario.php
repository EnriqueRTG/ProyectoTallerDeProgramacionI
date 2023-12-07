<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Usuario
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Usuario extends Migration {
    
    public function down() {
       $this->forge->dropTable('usuarios', true, true); 
    }

    public function up() {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => false,
            ],
            'apellido' => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => false,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
                'unique'         => true,
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'direccion' => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => false,
            ],
            'telefono' => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => false,
            ],
            'fecha_registro' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
            'id_rol' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'baja' => [
                'type'           => 'BOOLEAN',
                'default'        => false, 
            ],
        ]);
        $this->forge->addKey('id_usuario', true, true, 'pk_usuario');
        $this->forge->addForeignKey('id_rol', 'roles', 'id_rol', 'CASCADE', 'CASCADE', 'fk_usuario_rol');
        $this->forge->createTable('usuarios', true);
    }
}
