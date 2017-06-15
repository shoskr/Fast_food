<?php
/*session_start();
$_SESSION["login"]["usuario"];
if (isset($_SESSION["login"]["usuario"])) {
    echo '<p><font size="4" face="font_family" color="red"> Usuario: ' . $_SESSION["login"]["usuario"] . '</font></p>';
} else {

    header("location:login.php");
}*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <style>
            .bajar{
                margin: 50px 80px;   
            }


        </style>

    </head>
    <body style="background-color: black">

        <script src="js/jquery-3.2.0.min.js"></script>


        <div class="row bajar"   >
            <div class="panel-default">
                <div class="col-md-offset-2 col-md-8">

                    <nav class="navbar navbar-default"style="background-color: gainsboro; border: #222222">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"><img src="img/Logo_Letras.png" width="100px"/></a>

                            </div>
                            <ul class="nav nav-tabs" style="text-align: center">
                                <li><a href="paginavendedor.php">Home</a></li>
                                <li><a href="venta.php"><fon>Venta</fon></a></li>
                                <li><a href="#"><fon>Estado Pedido</fon></a></li>
                                <li><a href="#"><fon>Entrega Pedidos</fon></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>
