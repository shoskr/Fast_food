<?php

require_once 'Clases/DaoLogin.php';

session_start();

if (isset($_POST["btnEnviar"])) {
//    $accion = $_POST["btnAccion"];
//    if ($accion == "login") 

        $dao = new DaoLogin();
        $user = $_POST["txtUser"];
        $pass = $_POST["txtPass"];

        //$hash = password_hash($pass, PASSWORD_DEFAULT);
        $sha = sha1($pass);

        $respuestaFilas = $dao->obtenerUserFilas($user, $sha);
        $resultado = $dao->obtenerUser($user, $sha);

        if ($respuestaFilas > 0) {
            while ($row = mysqli_fetch_array($resultado)) {
                $_SESSION["login"]["usuario"] = $row[1];
                $_SESSION["login"]["tipo_usuario"] = $row[3];

                if ($_SESSION["login"]["tipo_usuario"] == 2) {
                    header('Location: index.php');
                    //echo "<div class='alert alert-primary'>Bienvenido ".$_SESSION["login"]["usuario"]."</div>";
                } elseif ($_SESSION["login"]["tipo_usuario"] == 1) {
                    header('Location: index.php');
                    //echo "<div class='alert alert-primary'>Bienvenido ".$_SESSION["login"]["usuario"]."</div>";
                }
                //echo $_SESSION["login"]["usuario"] . " " . $_SESSION["login"]["tipo_usuario"];
            }
        } else {
            header("Location:login.php?mensaje='Usuario no Existen'");
        }
    
} else {

    if (isset($_GET["logout"])) {
        // session_unregister("login");
        session_destroy();
        header("Location: index.php");
    } else {
        echo 'Debe iniciar session <a href="../index.php"> Iniciar Session</a>';
    }
} 