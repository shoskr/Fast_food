<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './paginavendedor.php';
        ?>
        <script>
            $(document).ready(function (event) {
                $("#btnAgregar").click(function () {
                    $("#txtRegistro").val("Agregar Producto");
                    $.ajax({
                        type: 'POST',
                        url: "ventasFile.php",
                        data: $("#formu").serialize(),
                        success: function (data) {
                            $("#respuesta").html(data);
                        }
                    });
                });
                $("#btnIniciar").click(function () {
                    $("#txtRegistro").val("Iniciar");
                    $.ajax({
                        type: 'POST',
                        url: "ventasFile.php",
                        data: $("#formu").serialize(),
                        success: function (data) {
                            $("#respuesta").html(data);
                        }

                    });
                });
                $("#btnComprar").click(function () {
                    $("#txtRegistro").val("Terminar Comprar");
                    $.ajax({
                        type: 'POST',
                        url: "ventasFile.php",
                        data: $("#formu").serialize(),
                        success: function (data) {
                            $("#respuesta").html(data);
                        }

                    });
                });
            });
        </script>
        <div class=" row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form id="formu">
                            <table class="table table-condensed" >
                                <tr>
                                    <td colspan="4" style="text-align: center"><font size="5">Fast Food Venta<font></td>    
                                </tr>
                                <tr>
                                    <td> <input class="btn-lg "type="button" value="Iniciar" id="btnIniciar"/></td>
                                </tr>

                                <tr>
                                    <td>Producto</td>
                                    <td>
                                        <select name="cboProd">
                                            <?php
                                            $conexion = new mysqli("localhost", "root", "", "fast_food");
                                            $cons = $conexion->query("select * from producto;");
                                            while ($row = mysqli_fetch_array($cons)) {
                                                ?>
                                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1] . " - $" . $row[3]; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>

                                    </td>
                                    <td>Cantidad</td>
                                    <td><input type="number" min="1" value="1" name="txtCantidad" style="width: 50px;height: 25px"></td>
                                </tr>


                                <tr>


                                    <td colspan="4" style="text-align: center"> <input class="btn-lg" type="button" value="Agregar Producto" id="btnAgregar"/></td>
                                </tr><tr>
                                    <td colspan="4" style="text-align: right"><input class="btn-lg" type="button" value="Terminar Comprar" id="btnComprar"/></td>
                                </tr>
                            </table>
                            <input type="hidden" name="txtRegistro" id="txtRegistro">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div id="respuesta">

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
