<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
    </head>
    <body>
        <form action="/producto/update/<?= $producto['id_producto'] ?>" method="POST">

            <label for="title">Nombre</label>
            <input type="input" name="nombre" value="<?= $producto['nombre'] ?>" />
            <br>
            <label for="title">Descripcion</label>
            <textarea type="input" name="descripcion"><?= $producto['descripcion'] ?></textarea>
            <br>
            <label for="title">Precio</label>
            <input type="number" name="precio" step="0.01" value="<?= $producto['precio'] ?>" />
            <br>
            <label for="title">Stock</label>
            <input type="number" name="stock" value="<?= $producto['stock'] ?>" />
            <br>
            <label for="title">Imagen</label>
            <input type="file" name="imagen" value="<?= $producto['imagen'] ?>" />
            <br>

            <label for="categorias">Categoria</label>
            <select name="categoria" id="categorias">

                <?php foreach ($categorias as $key => $value) : ?>

                    <?php if ($value['id_categoria'] == $producto['id_categoria']): ?>
                        <option value="<?= $value['id_categoria'] ?>" selected><?= $value['nombre'] ?></option>
                    <?php else : ?>
                        <option value="<?= $value['id_categoria'] ?>"><?= $value['nombre'] ?></option>
                    <?php endif ?>

                <?php endforeach ?>

            </select>
            <br>

            <input type="submit" value="<?= $nombre_boton ?>" />

            <br>
            <br>

            <a href="/producto">Lista de Productos</a>
            <form action="/producto/delete/<?= $producto['id_producto'] ?>" method="POST">
                <input type="submit" value="Eliminar" name="Eliminar" />
            </form>

        </form>
    </body>
</html>
