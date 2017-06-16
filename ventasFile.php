<?php

//session_start();
//$_SESSION["login"]["id"];
$nombre=2;


/*if (isset($_SESSION["login"]["id"])) {
    $nombre = 2;// $_SESSION["login"]["id"];
}*/

if (isset($_POST["txtRegistro"])) {
    
  date_default_timezone_set('America/Santiago');
    
    $conexion = new mysqli("localhost", "root", "", "fast_food");

    $reg = $_POST["txtRegistro"];


    if ($reg == "Iniciar") {        

        $fecha = date("y-m-d");
        $hora = date("H:i");
        
   
        
        $sql = $conexion->query("INSERT INTO venta VALUES(null,0,'$fecha','$hora',$nombre);");


        echo "<div>";
        echo '<table class="table" style="background-color: white">';
        echo "<tr>";
        echo "<td> Producto <td>";
        echo "<td> cantidad <td>";
        echo "</tr>";
        echo "<table>";
        echo "</div>";



        return;
    }


    if ($reg == "Agregar Producto") {

        $produc = $_POST["cboProd"];
        $cantidad = $_POST["txtCantidad"];
        $valor;
        $tgen;
        $venta = 0;
        $conP=$produc;
        $sql1 = $conexion->query("select * from venta ;");
        while ($row = mysqli_fetch_array($sql1)) {
            $venta = $row[0];
        }


        $sql = $conexion->query("INSERT INTO detalle_venta VALUES(null,$cantidad,0,0,$produc,$venta,0);");


        if ($sql > 0) {
            $tgen = 0;
            $tt=0;
            $sql1 = $conexion->query("select * from producto;");

            while ($row = mysqli_fetch_array($sql1)) {
                if ($conP == $row[0]) {
                    $valor = $row[3];
                    echo $row[1];
                }
            }
            $tt = $valor * $cantidad;

            $tot = $conexion->query("UPDATE venta SET Total = Total + $tt WHERE `Idventas` = $venta ;");

            $sql2 = $conexion->query("select * from venta;");
            while ($file = mysqli_fetch_array($sql2)) {
                $tgen = $file[1];
            }

            $sql1 = $conexion->query("select detalle_venta.iddetalle_venta, detalle_venta.cantidad, producto.nombre"
                                    ." from detalle_venta "
                                    ."inner join producto on producto.idproducto = detalle_venta.producto_idproducto "
                                    ."where detalle_venta.`venta_Idventas` = $venta;");


            echo "<div>";
            echo '<table class="table " style="background-color: white">';
            echo "<tr>";
            echo "<td> Producto </td>";
            echo "<td> cantidad </td>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($sql1)) {
                echo "<tr>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "</tr>";
            }

            echo '<tr>';
            echo '<td></td>';
            echo '<td> TOTAL  =' . $tgen . '</td>';
            echo '</tr>';
            echo '</table>';
            echo '</div>';
        } else {
            echo 'no grabo';
        }
    }
    
    
    if ($reg == "Terminar Comprar") {
              
        $total;
        $venta;
         $sql1 = $conexion->query("select * from venta ;");
            while ($file = mysqli_fetch_array($sql1)) {
                $total=$file[1];
                $venta = $file[0];
            }          
            
           
            echo '<p><b style="text-align: center"> Su Total a Pagar es = $'.$total.'</b></p>' ;
            
    }
    return;
}
