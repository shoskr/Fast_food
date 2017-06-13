<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Publicidad</title>
        <!-- Compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Minified JS library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/portfolio/fullsize/1.jpg"  width="100%" alt=""/>
                    <div class="carousel-caption">
                        <h1>Filetes de Fenix</h1>
                        <h2>A solo $20.000</h2>
                    </div>
                </div>

                <div class="item">
                    <img src="img/portfolio/fullsize/2.jpg" width="100%" alt=""/>
                    <div class="carousel-caption">
                        <h1>Hamburguesa de Calamardo</h1>
                        <h2>A solo $3.000</h2>
                    </div>
                </div>

                <div class="item">
                    <img src="img/portfolio/fullsize/3.jpg" width="100%" alt=""/>
                    <div class="carousel-caption">
                        <h1>Alitas de Dragon</h1>
                        <h2>A solo $100.000</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>

            </a>
        </div>
    </body>
</html>
