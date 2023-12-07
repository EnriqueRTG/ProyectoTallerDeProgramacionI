<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Review
 *
 * @author Torres Gamarra Enrique Ramon
 */

class Review extends Migration{
    
    public function down() {
        $this->forge->dropTable('reviews', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_review' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_producto' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'calificacion' => [
                'type'           => 'INT',
                'null'           => false,
            ],
            'comentario' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'fecha_review' => [
                'type'           => 'DATE',
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id_review', true, true, 'pk_review');
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE', 'fk_review_usuario');
        $this->forge->addForeignKey('id_producto', 'productos', 'id_producto', 'CASCADE', 'CASCADE', 'fk_review_producto');
        $this->forge->createTable('reviews', true);
    }
}
