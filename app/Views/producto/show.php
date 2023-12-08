<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $producto['nombre'] ?></title>
    </head>
    <body>
        <h1><?= $producto['nombre'] ?></h1>
        <p><?= $producto['nombre'] ?></p>
        <p><?= $producto['descripcion'] ?></p>
        <p><?= $producto['precio'] ?></p>
        <p><?= $producto['stock'] ?></p>

        <br>

        <a href="/producto">Lista de Productos</a>
        <form action="/producto/delete/<?= $producto['id_producto'] ?>" method="POST">
            <input type="submit" value="Eliminar" name="Eliminar" />
        </form>
        <a href="/producto/edit/<?= $producto['id_producto'] ?>">Editar</a>

    </body>
</html>
