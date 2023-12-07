<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Estado
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Estado extends Migration{
  
    public function down() {
        $this->forge->dropTable('estados', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_estado' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'descripcion' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'         => true,
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id_estado', true, true, 'pk_estado');
        $this->forge->createTable('estados', true);
    }
}
