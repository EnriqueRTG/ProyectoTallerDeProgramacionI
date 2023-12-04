<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

/**
 * Description of Productos
 *
 * @author Enrique
 */
class Productos extends Migration{
    //put your code here
    public function down() {
        $this->forge->dropTable('productos');
    }

    public function up() {
        $this->forge->addField([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);
        $this->forge->addKey('', True);
        $this->forge->createTable('productos');
    }
}
