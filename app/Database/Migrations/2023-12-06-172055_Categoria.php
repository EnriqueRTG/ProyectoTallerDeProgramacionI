<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Description of Categoria
 *
 * @author Torres Gamarra Enrique Ramon
 */

class Categoria extends Migration {

    public function down() {
        $this->forge->dropTable('categorias', true, true);
    }

    public function up() {
        $this->forge->addField([
            'id_categoria' => [
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

        $this->forge->addKey('id_categoria', true, true, 'pk_categoria');
        $this->forge->createTable('categorias', true);
    }
}
