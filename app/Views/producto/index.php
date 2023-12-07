<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1><?= $titulo ?></h1>




        <a href="/producto/new">Crear</a>

        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $key => $value): ?>
                    <tr>
                        <td><?= $value['nombre'] ?></td>
                        <td><?= $value['precio'] ?></td>
                        <td><?= $value['stock'] ?></td>
                        <td>
                            <a href="/producto/<?= $value['id_producto'] ?>">Ver</a>
                            <form action="/producto/delete/<?= $value['id_producto'] ?>" method="POST">
                                <input type="submit" value="Eliminar" name="Eliminar" />
                            </form>
                            <a href="/producto/edit/<?= $value['id_producto'] ?>">Editar</a>
                        </td>
                    </tr>

                <?php endforeach ?>

            </tbody>
        </table>


        <h3><?php echo date("Y-m-d H:i:s") ?></h3>

    </body>
</html>
