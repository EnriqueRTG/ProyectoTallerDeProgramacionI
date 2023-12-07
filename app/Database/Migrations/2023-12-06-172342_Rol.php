<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Rol
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Rol extends Migration{
    
    public function down() {
        $this->forge->dropTable('roles', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_rol' => [
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
        ]);
        $this->forge->addKey('id_rol', true, true, 'pk_rol');
        $this->forge->createTable('roles', true);
    }
}
