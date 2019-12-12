<?php
    session_start();
    if(isset($_POST["emailLogin"])){
        $usuariologin = $_POST["usuarioslogin"];
        $_SESSION["usuario"] = $usuariologin;
        header("Location: http://localhost/proyectoISoft/");
    }else{
        session_destroy();
    }
    
?>