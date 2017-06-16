<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './paginavendedor.php';
        $conexion = new mysqli("localhost", "root", "", "fast_food");

        $sql = $conexion->query("select detalle_venta.iddetalle_venta, detalle_venta.`venta_Idventas`, producto.nombre, detalle_venta.cantidad "
                . "from detalle_venta "
                . "inner join producto "
                . "on producto.idproducto = detalle_venta.producto_idproducto "
                . "where detalle_venta.estado = 0;");
        ?>
        <div class=" row">
            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <div style="background-color: appworkspace"> 

                            <form action="procesomostrar.php" method="post">
                                <table class="table" style="background-color: whitesmoke">
                                    <tr>
                                        <td colspan="4" style="text-align: center">Productos En Preparacion</td>
                                    </tr>
                                    <tr>
                                        <td> Producto </td>
                                        <td> Nº Venta </td>
                                        <td> Producto </td>
                                        <td> Cantidad </td>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                        <tr>
                                            <td><input type="radio" name="id" value="<?php echo $row[0] ?>" /></td>
                                            <td><?php echo $row[1] ?></td>
                                            <td><?php echo $row[2] ?></td>
                                            <td><?php echo $row[3] ?></td>


                                        </tr>

                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td><input type="submit" id="btnTerminado" value="Producto Terminado"/></td>
                                    </tr>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
