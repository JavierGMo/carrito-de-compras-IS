<?php
    //Si el ususario esta en la variable de session no puede acceder al login ni a registrar, a menos de que sea
    //admin
    if(isset($_SESSION["usuario"])){
        header("Location: http://localhost/proyectoISoft/");
    }
?>
<!--noestaregistrado.php-->