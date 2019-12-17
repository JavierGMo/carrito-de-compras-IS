<?php
    //Si el usuario no esta logeado no puede acceder a su administracion de productos
    if(!isset($_SESSION["usuario"])){
        header("Location: http://localhost/proyectoISoft/");
    }
?>