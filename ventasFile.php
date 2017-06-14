<?php

/*session_start();
$_SESSION["login"]["usuario"];
$nombre;


if (isset($_SESSION['user1'])) {
    $nombre = $_SESSION["login"]["usuario"];
}*/

if (isset($_POST["txtRegistro"])) {
    
    echo '01';
    
    $conexion = new mysqli("localhost", "root", "", "fast_food");

    $reg = $_POST["txtRegistro"];


    if ($reg == "Iniciar") {        

        $fecha = date("y-m-d");
        $hora = date("H:i");
        
    echo $fecha.' '.$hora;
        
        $sql = $conexion->query("INSERT INTO venta VALUES(null,0,'$fecha','$hora',1);");


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
        echo $conP = $produc;
        $sql1 = $conexion->query("select * from venta ;");
        while ($row = mysqli_fetch_array($sql1)) {
            $venta = $row[0];
        }


        $sql = $conexion->query("INSERT INTO detalle_producto VALUES(null,$produc,$venta,$cantidad);");


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

            $tot = $conexion->query("UPDATE venta SET Total = Total + $tt WHERE `idVENTAS` = $venta ;");

            $sql2 = $conexion->query("select * from venta;");
            while ($file = mysqli_fetch_array($sql2)) {
                $tgen = $file[2];
            }

            $sql1 = $conexion->query("CALL LISTARDETALLE($venta);");


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
                $total=$file[2];
                $venta = $file[0];
            }
            
            $ent = $conexion->query("insert into entrega values(null,'$entre', '$emp', $venta );");
            
            
           
            echo '<p><b style="text-align: center"> Su Total a Pagar es = $'.$total.'</b></p>' ;
            
    }
    return;
}
