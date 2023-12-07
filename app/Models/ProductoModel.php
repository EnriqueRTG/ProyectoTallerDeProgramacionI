<?php

namespace App\Models;

use CodeIgniter\Model;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ProductoModel
 *
 * @author Torres Gamarra Enrique Ramon
 */
class ProductoModel extends Model {
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre', 'descripcion', 'precio', 'stock', 'imagen', 'id_categoria', 'baja'];
}
