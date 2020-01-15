<?php
    session_start();
    include("../database/database.php");
    //falta agregar seguridad tanto en lo que recibo como en lo que mando al query, checar bind params para querys
    //mandar un mensaje de que ha iniciado sesion con exito
    if(isset($_POST["usuarionamelogin"]) && isset($_POST["passworsLogin"])){
        $usuariologin = trim($_POST["usuarionamelogin"]);
        //quitamos espacios en blanco
        $passLog = trim($_POST["passworsLogin"]);
        $query = "SELECT NOMBRE, APELLIDO, CORREO FROM usuario WHERE (CORREO='$usuariologin' OR NOMBREUSUARIO='$usuariologin') AND CONTRASENIA='$passLog';";
        $res_db = mysqli_query($conexion, $query);
        //var_dump($res_db);
        if($res_db){
            $res_db = mysqli_fetch_assoc($res_db);
            $_SESSION["usuario"] = $res_db;
            //mysqli_free_result($res_db);
        }else{
            session_destroy();
        }
    }else{
        session_destroy();
    }
    mysqli_close($conexion);
    var_dump($_SESSION);
    header("Location: http://localhost/proyectoISoft/");
    
?>