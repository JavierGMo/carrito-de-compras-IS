<?php
    session_start();
    include_once('../../../database/database.php');
    include_once('../clasesdeusuario/ActualizarDatos.php');
    include_once('../clasesdeusuario/DataValidate.php');
    /**hacer pruebas para ver que hace la conexion en las clases
     * sin ser un parametro en los metodos y
     * si se pasa como parametro hacerla null y volver a usarla
     * fuera de la clase
     */
    //confirmpasswordactualizar
    //passwordactualizar
    $redireccion = "index.php";
    if(isset($_POST["passwordactualizar"]) &&
         isset($_POST["confirmpasswordactualizar"]) &&
         isset($_POST["emailidentificador"])){
        $updatePassUser = new ActualizarDatos();
        $updatePassUser->setCorreo($_POST["emailidentificador"]);
        $updatePassUser->setPassword($_POST["passwordactualizar"]);
        $updatePassUser->setPasswordConfirm($_POST["confirmpasswordactualizar"]);
        if($updatePassUser->validatePassword($conexion)){
            session_unset();
            session_destroy();
            $redireccion = "index.php";
        }else{
            $redireccion = "proyectoISoft/cuenta/usuario/perfilusuario.php";
        }
        $updatePassUser = null;
        //proyectoISoft/cuenta/usuario/perfilusuario.php
        //header("Location: /proyectoISoft/".$redireccion);
    }
    header("Location: /proyectoISoft/".$redireccion);
?>