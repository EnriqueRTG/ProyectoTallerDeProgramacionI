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
        <h1>Titulo</h1>
        <p>Cuerpo de la pagina</p>
        <h3><?php echo date("Y-m-d H:i:s") ?></h3>
        <!-- <?= date("Y-m-d H:i:s") ?> es lo mismo a <?php echo date("Y-m-d H:i:s") ?>-->

        <h3><?= $nombreVariableVista ?></h3>

        <h3><?= $nombreVariableVistaNumero ?></h3>

        <h3><?= $nombreVariableVistaBool ?></h3>

        <ul>

            <?php foreach ($miArray as $key => $value) : ?>

                <li>
                    <?= $value ?>
                </li>

            <?php endforeach ?>
        </ul>


        <?php
        // put your code here
        ?>
    </body>
</html>
