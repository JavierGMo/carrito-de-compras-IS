<?php
    session_start();
    include("../database/database.php");
    if(isset($_POST["usuarionamelogin"]) && isset($_POST["passworsLogin"])){
        $usuariologin = $_POST["usuarionamelogin"];
        $passLog = $_POST["passworsLogin"];
        $query = "SELECT NOMBRE, APELLIDO, CORREO FROM usuario WHERE (CORREO='".$usuariologin."' OR NOMBRE='".$usuariologin."') AND password='".$passLog."'";
        $res_db = mysqli_query($conexion, $query);
        if($res_db){
            $res_db = mysqli_fetch_assoc($res_db);
            $_SESSION["usuario"] = $res_db;
            mysqli_free_result($res_db);
        }else{
            session_destroy();
        }
    }else{
        session_destroy();
    }
    mysqli_close($conexion);
    header("Location: http://localhost/proyectoISoft/");
    
?>