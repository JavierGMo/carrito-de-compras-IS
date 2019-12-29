<?php
    include_once('../../../database/database.php');
    include_once('../clasesdeusuario/ActualizarDatos.php');
    include_once('../clasesdeusuario/DataValidate.php');
    echo "hola";
    echo "<br>";
    //var_dump($_POST);
    $redireccion = "index.php";
    $dataValida = new DataValidate($_POST);
    var_dump($_POST);
    if(isset($_POST["correooculto"]) && isset($_POST["apellidoactualizar"])
        && isset($_POST["nombreactualizar"])){
        var_dump($_POST);
        $updateData = new ActualizarDatos();
        //$updateData->setNombre($_POST["nombreactualizar"]);
        $updateData->setNombre($_POST["nombreactualizar"]);
        $updateData->setApellido($_POST["apellidoactualizar"]);
        $updateData->setCorreo($_POST["correooculto"]);
        if($updateData->queryUpdateDataUser($conexion)){
            //mandar mensajes
            $redireccion = "cuenta/usuario/perfilusuario.php";
        }else{
            //mandar mensajes
            $redireccion = "ofertas.php";
        }
        $updateData = null;
    }else{
        //mandar mensajes
        $redireccion = "index.php";
    }
    $dataValida = null;
    mysqli_close($conexion);
    
    header("Location: /proyectoISoft/".$redireccion);
?>