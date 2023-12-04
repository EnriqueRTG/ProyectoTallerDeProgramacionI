<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

/**
 * Description of Producto
 *
 * @author Enrique
 */
class Producto extends BaseController {

    public function index() {
        $data = [
            'nombreVariableVista' => "Contenido",
            'nombreVariableVistaNumero' => 5,
            'nombreVariableVistaBool' => true,
            'miArray' => [1,2,3,4,5,"Item array"]
            ];
        
        echo view("index", $data);
    }

    public function test($x = 0, $n = 10) {
        echo "Hola Mundo test " .$x. " " .$n;
    }
    
    public function new() {
        echo view("producto/create");
    }
    
    public function create() {
        echo "Precesando el Form!";
    }
    
    public function edit($id) {
        echo view("producto/edit");
    }
    
    public function update($id) {
        echo "Procesando el Form! " .$id;        
    }
    
    
}
