<?php
    include("../database/database.php");
    
    if(isset($_POST["nombre_producto_usuario"]) && isset($_POST["precio_producto_usuario"]) && isset($_POST["desc_producto_usuario"])){
        
        $nombre_producto = $_POST["nombre_producto_usuario"];
        $precio_producto = $_POST["precio_producto_usuario"];
        $descripcion_producto = $_POST["desc_producto_usuario"];
        $refimgproducto = $_POST["ref-img-producto"];
        $usuario_idusuario = $_POST["usuario-idusuario"];
        $categoria_idcategoria = $_POST["categoria_idcategoria"];
        $proveedor_id = $_POST["proveedor_id"];
        $query = "INSERT INTO producto (NOMBRE, DESCRIPCION, PRECIO, REFIMAGENPRODUCTO, USUARIO_IDUSUARIO, CATEGORIA_IDCATEORIA, PROVEEDOR_ID) VALUES ('$nombre_producto', '$descripcion_producto', '$precio_producto', '$refimgproducto', '$usuario_idusuario', '$categoria_idcategoria', '$proveedor_id');";
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