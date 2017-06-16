<?php

$idProducto = $_POST["id"];
date_default_timezone_set('America/Santiago');


 $conexion = new mysqli("localhost", "root", "", "fast_food");
 
$consulta3  = "UPDATE detalle_venta " 
               ." set termino = 1"
             ." where iddetalle_venta = $idProducto ;";

$sql3 = $conexion->query($consulta3);

if($sql3 > 0){
    
     header("Location:entregapedido.php");
}else{
    echo"no paso";
}

