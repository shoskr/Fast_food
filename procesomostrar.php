<?php

//calcular diferencias de horas;
function RestarHoras($horaini,$horafin)

{

	$horai=substr($horaini,0,2);

	$mini=substr($horaini,3,2);

	$segi=substr($horaini,6,2);

 

	$horaf=substr($horafin,0,2);

	$minf=substr($horafin,3,2);

	$segf=substr($horafin,6,2);

 

	$ini=((($horai*60)*60)+($mini*60)+$segi);

	$fin=((($horaf*60)*60)+($minf*60)+$segf);

 

	$dif=$fin-$ini;

 

	$difh=floor($dif/3600);

	$difm=floor(($dif-($difh*3600))/60);

	$difs=$dif-($difm*60)-($difh*3600);

	return date("H:i:s",mktime($difh,$difm,$difs));

}

$idProducto = $_POST["id"];
date_default_timezone_set('America/Santiago');


 $conexion = new mysqli("localhost", "root", "", "fast_food");
 
 $consulta = "select *  from detalle_venta where iddetalle_venta = $idProducto ;";
 
 $sql = $conexion->query($consulta);
 
 $idVenta = 0;
 while ($row = mysqli_fetch_array($sql)) {
     $idVenta = $row[5];
    
}

$consulta2 = "select * from venta where idventas = $idVenta ;";

$sql2 = $conexion->query($consulta2);

$hi;

while ($row1 = mysqli_fetch_array($sql2)) {
     $hi =$row1[3] ;
    
}

$ht = date("H:i:s");


$dif = RestarHoras($hi, $ht);

$consulta3  = "UPDATE detalle_venta " 
               ." set tiempo = '$dif',  estado = 1"
             ." where iddetalle_venta = $idProducto ;";

$sql3 = $conexion->query($consulta3);

if($sql3 > 0){
    
     header("Location:mostrarpedidos.php");
}else{
    echo"no paso";
}







