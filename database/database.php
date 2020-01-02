<?php 
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $puerto = "8080";
    $nombre_db = "carritocompras";
    try {
        $conexion = mysqli_connect( $servidor, $usuario, "", $nombre_db);// or die ("No se ha podido conectar al servidor de Base de datos");
    } catch (Error $e) {
        echo "Type: ".$e;
    }



?>