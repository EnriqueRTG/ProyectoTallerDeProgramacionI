<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;

/**
 * Description of Producto
 *
 * @author Torres Gamarra Enrique Ramon
 */
class Producto extends BaseController {

    public function index() {
        $productoModel = new ProductoModel();
 
        $data = [
            'titulo'    => 'Productos',
            'productos' => $productoModel->find(),
        ];
        
        echo view("producto/index", $data);
    }
    
    public function  show($id){
        $productoModel = new ProductoModel();
        
        $data = [
            'producto' => $productoModel->find($id),
        ];
        
        echo view("producto/show", $data);
    }
    
    public function new() {
        $categoriaModel = new CategoriaModel;
        
        $data = [
            'categorias' => $categoriaModel->find(),
        ];
        
        echo view("producto/new", $data);
    }
    
    public function create() {
        $productoModel = new ProductoModel;
        $categoriaModel = new CategoriaModel;
        
        $data = [
            'categorias' => $categoriaModel->find(),
        ];
        
        $productoModel->insert([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'imagen' => $this->request->getPost('imagen'),
            'id_categoria' => $this->request->getPost('categoria'),
        ]);
        
        echo view("producto/new", $data);
    }
    
    public function edit($id) {
        echo view("producto/edit");
    }
    
    public function update($id) {
        echo "Procesando el Form! " .$id;        
    }
    
    
}
