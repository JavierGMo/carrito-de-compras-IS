<?php
    session_start();
    include("../database/database.php");
    if(isset($_POST["emailLogin"]) && isset($_POST["passworsLogin"])){
        $usuariologin = $_POST["emailLogin"];
        $passLog = $_POST["passworsLogin"];
        $query = "SELECT nombre, apellido, correo, password FROM datos WHERE correo='".$usuariologin."' AND password='".$passLog."'";
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