<?php
    session_start();
    include("../database/database.php");
    if(isset($_POST["usuarionamelogin"]) && isset($_POST["passworsLogin"])){
        $usuariologin = $_POST["usuarionamelogin"];
        $passLog = $_POST["passworsLogin"];
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