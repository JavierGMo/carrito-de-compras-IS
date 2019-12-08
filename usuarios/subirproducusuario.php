<?php
    include("../database/database.php");
    
    if(isset($_POST["nombre_producto_usuario"]) && isset($_POST["precio_producto_usuario"]) && isset($_POST["desc_producto_usuario"])){
        
        $nombre_producto = $_POST["nombre_producto_usuario"];
        $precio_producto = $_POST["precio_producto_usuario"];
        $descripcion_producto = $_POST["desc_producto_usuario"];
        $query = "INSERT INTO productos (nombre, precio, descripcion) VALUES ('$nombre_producto','$precio_producto', '$descripcion_producto');";
        try {
            mysqli_query($conexion, $query);
        } catch (\Throwable $th) {
            die("<br><p> Algo salio mal :/ ". mysqli_error($conexion)."</p>" );
        }
        //Cerrar la conexion a la base XD
        mysqli_close($conexion);
        header("Location: http://localhost/proyectoISoft/subirproductousuario.php");
    }
?>