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
            'titulo' => 'Productos',
            'productos' => $productoModel->find(),
            'mensaje' => '',
        ];

        echo view("producto/index", $data);
    }

    public function show($id) {
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
        $productoModel = new ProductoModel();

        $productoModel->insert([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'imagen' => $this->request->getPost('imagen'),
            'id_categoria' => $this->request->getPost('categoria'),
        ]);
        
        $producto = $productoModel->where('nombre', $this->request->getPost('nombre'))->first();
        
        $data = [
            'producto' => $productoModel->find($producto['id_producto']),
        ];

        echo view("producto/show", $data);
    }

    public function edit($id) {
        $productoModel = new ProductoModel();
        $categoriaModel = new CategoriaModel();

        $data = [
            'producto' => $productoModel->find($id),
            'categorias' => $categoriaModel->find(),
            'title' => 'Editar Producto',
            'nombre_boton' => 'Actualizar',
        ];

        echo view("producto/edit", $data);
    }

    public function update($id) {
        $productoModel = new ProductoModel();

        $productoModel->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
            'imagen' => $this->request->getPost('imagen'),
            'id_categoria' => $this->request->getPost('categoria'),
            'baja' => $this->request->getPost('baja'),
        ]);

        $data = [
            'producto' => $productoModel->find($id),
        ];

        echo view("producto/show", $data);
    }

    public function delete($id) {
        $productoModel = new ProductoModel();
        $productoModel->delete($id);

        $data = [
            'productos' => $productoModel->find(),
            'titulo' => 'Productos',
            'mensaje' => 'Producto Eliminado',
        ];

        echo view("producto/index", $data);
    }
}
