<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Producto</title>
    </head>
    <body>
        <form action="create" method="POST">
            <label for="title">Nombre</label>
            <input type="input" name="nombre" value="" />
            <br>
            <label for="title">Descripcion</label>
            <textarea type="input" name="descripcion"></textarea>
            <br>
            <label for="title">Precio</label>
            <input type="number" name="precio" step="0.01" value="" />
            <br>
            <label for="title">Stock</label>
            <input type="number" name="stock" value="" />
            <br>
            <label for="title">Imagen</label>
            <input type="file" name="imagen" value="" />
            <br>

            <label for="categorias">Categoria</label>
            <select name="categoria" id="categorias">

                <?php foreach ($categorias as $key => $value) : ?>
                    <option value="<?= $value['id_categoria'] ?>"><?= $value['nombre'] ?></option>
                <?php endforeach ?>

            </select>
            <br>

            <input type="submit" value="Crear" />
        </form>
    </body>
</html>
