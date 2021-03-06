<?php
if (isset($_GET["mensaje"])) {
    echo "<script> alert(" . $_GET["mensaje"] . "); </script>";
}
?>
<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="SoluService" content="">

        <title>Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/creative.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Navegador</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="img/Logo_Letras.png" height="130%" width="100%" ></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contactanos</a>
                        </li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <aside class="bg-dark">
            <center>
                <table class="" width="50%">
                    <tr>
                    <td>
                        <table class="table">
                            <td>
                               
                            <center><h1>Login</h1></center>
                            <tr>
                            </td>

                            <td>
                                <form method="POST" action="procesoLogin.php" id="formulario">
                                    <div class="form-group">
                                        <label for="txtUser">Usuario:</label>
                                        <input type="text"  name="txtUser" id="txtUser" placeholder="Ej: Pavel">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtPass">Contraseña:</label>
                                        <input type="password" id="txtPass" name="txtPass" placeholder="Ej: ********* ">
                                    </div>
                                    <center>
                                        <input type="submit" name="btnEnviar" id="btnEnviar" value="Ingresar" class="btn btn-primary">
                                        <input type="reset" name="btnLimpiar" id="btnLimpiar" value="Limpiar" class="btn btn-danger">
                                    </center>
                                    <input type="hidden" id="btnAccion" name="btnAccion">

                                    <div id="respuesta">

                                    </div>
                                </form>

                            </td>
                            </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                <br>
            </center>
        </aside>



        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Contactanos</h2>
                        <hr class="primary">
                        <p>Puedes contactarnos desde las 9:00 hrs hasta las 22:00 hrs de Lunes a Viernes. Desde las 9:00 hrs hasta las 18:00 hrs Sabados y Domingo</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p><a href="mailto:contacto@fast_food.com">contacto@fast_food.com</a></p>
                    </div>
                </div>
            </div>
        </section>



        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/creative.min.js"></script>

    </body>

</html>

