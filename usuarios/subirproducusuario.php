<?php
    include("../database/database.php");
    
    if(isset($_POST["nombre_producto_usuario"]) 
        && isset($_POST["precio_producto_usuario"]) 
        && isset($_POST["desc_producto_usuario"])){
        
        $nombre_producto = $_POST["nombre_producto_usuario"];
        $precio_producto = $_POST["precio_producto_usuario"];
        $descripcion_producto = $_POST["desc_producto_usuario"];
        //$refimgproducto = $_POST["ref-img-producto"];
        $refimgproducto = "/assets/imgproductos/default.jpg";
        $usuario_idusuario = 1;
        $categoria_idcategoria = 1;
        $proveedor_id = 1;
        //$usuario_idusuario = $_POST["usuario-idusuario"];
        //$categoria_idcategoria = $_POST["categoria_idcategoria"];
        //$proveedor_id = $_POST["proveedor_id"];
        $query = "INSERT INTO producto (NOMBREPRODUCTO, DESCRIPCION, PRECIO, REFIMAGENPRODUCTO, USUARIO_IDUSUARIO, CATEGORIA_IDCATEGORIA, PROVEEDOR_ID) VALUES ('$nombre_producto', '$descripcion_producto', '$precio_producto', '$refimgproducto', '$usuario_idusuario', '$categoria_idcategoria', '$proveedor_id');";
        try {
            echo "correcto;";
            mysqli_query($conexion, $query);
        } catch (\Throwable $th) {
            echo $th;
            die("<br><p> Algo salio mal :/ ". mysqli_error($conexion)."</p>" );
        }
        //Cerrar la conexion a la base XD
        mysqli_close($conexion);
        //header("Location: http://localhost/proyectoISoft/subirproductousuario.php");
    }
?>