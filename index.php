<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="SoluService" content="">

        <title>Fast Food</title>

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
                            <a class="page-scroll" href="#about">Quienés Somos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Catalogo</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Promociones</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#ubicacion">Ubicación</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contactanos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="publicidad.php">Publicidad</a>
                        </li>
                        <?php
                        session_start();
                        if (!(isset($_SESSION["login"]["usuario"]))) {
                            ?>
                            <li>
                                <a href="login.php" class="portfolio-box">Login</a>
                            </li>
                        <?php } else { ?> 
                            <li><a class="page-scroll" href="#contact">Bienvenido:  <?php echo $_SESSION["login"]["usuario"] ?></a><li> 
                            <li><a href="procesoLogin.php?logout=si" class="btn btn-danger">Cerrar Session</a></li>
                            <?php } ?>
                        </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading"> <!-- TITULO --></h1>
                    <!--<hr>-->
                    <p><!-- Eslogan --></p>
                    <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Encuentra Más</a>-->
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">¿Quiénes Somos?</h2>
                        <hr class="light">
                        <p class="text-faded">Somos una empresa de Comida Rapida que busca ser la mejor cadena de restaurantes de hamburguesas en el mundo en términos de Servicio al cliente, ambiente laboral y productividad.
                            <br><br> Siempre Deleitamos a nuestros clientes con las mejoras hamburguesas del mercado y con una atención rápida y eficiente.</p>
                        <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Catalogo</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                            <h3>Combos Premium</h3>
                            <p class="text-muted">Lo Mejor de lo Mejor que podras encontrar en Fast_Food.</p><br>
                            <a href="#services" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                            <h3>La carta</h3>
                            <p class="text-muted">Revisa nuestra carta tradicional, y tus menus de siempre</p><br>
                            <a href="#services" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                            <h3>Ejecutivos</h3>
                            <p class="text-muted">Desayunos ejecutvos para optimizar tus tiempos</p><br>
                            <a href="#services" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                            <h3>Combo 2</h3>
                            <p class="text-muted">Las mejores promociones para las parejas que visitan Fast Food</p><br>
                            <a href="#services" class="btn btn-warning">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter popup-gallery">
                    <div class="col-lg-4 col-sm-6">
                        <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Combo 1
                                    </div>
                                    <div class="project-name">
                                        Filetes de Pavo Real
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Combo 2
                                    </div>
                                    <div class="project-name">
                                        Hamburguesa Carne de Dragon
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Combo 3
                                    </div>
                                    <div class="project-name">
                                        Alitas de Pollo picantes
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Combo 4
                                    </div>
                                    <div class="project-name">
                                        Chorrillana a lo pobre
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Combo 5
                                    </div>
                                    <div class="project-name">
                                        Pizza directamente desde la mia Italia
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                            <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Combo 6
                                    </div>
                                    <div class="project-name">
                                        Menu de pasto para los vegetarianos
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="ubicacion">
            <aside class="bg-dark">
                <div class="container text-center">
                    <div class="call-to-action">
                        <h2>Ubicación</h2>
                        <p>Estamos ubicados en avenida Concha y Toro #111 Puente Alto. Ven a Visitarnos</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13293.065481533726!2d-70.5785929!3d-33.5983925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x893f58a1479b8f82!2sDuoc+UC%3A+Sede+Puente+Alto!5e0!3m2!1ses-419!2s!4v1491769925277" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <br><br><a href="https://www.google.com/maps?ll=-33.598392,-70.578593&z=15&t=m&hl=es-CL&gl=US&mapclient=embed&cid=9889720756443254658" class="btn btn-default btn-xl sr-button">Ir a Google Map!</a>
                    </div>
                </div>
            </aside>

        </section>



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

