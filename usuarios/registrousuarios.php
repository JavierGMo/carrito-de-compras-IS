<?php
    //Conectamos a la base de datos
    include("../database/database.php");
    include_once('../clasesusuario/RegistroUsuario.php');
    if(isset($_POST["nombre-registro"]) && isset($_POST["apellido-registro"]) 
        && isset($_POST["email-registro"]) && isset($_POST["pass-registro"]) 
        && isset($_POST["pass-conf-registro"]) && isset($_POST["nombreusuariounico"])){
        //Modificar esta clase para que gaurde al usuario
            $REFIMGPERFIL = "default.jpg";
            $redireccion = "";
            var_dump($_FILES);
            echo "<br>";
            var_dump($_FILES);
            $registroUsuario = new RegistroUsuario();
            if($registroUsuario->tratamientoImagenes($_FILES)){
                $REFIMGPERFIL = $_FILES["refimgperfilusuarios"]["name"];
                //Mandar un error con alertify para decir si la imagen es correcta
                // $rutaOrigen = $_FILES["refimgperfilusuarios"]["tmp_name"];
                // $rutaIndex = dirname(realpath(__FILE__),2);
                // $rutaDestino = $rutaIndex."\\assests\\imgprofileusers\\".$REFIMGPERFIL;
                // if(move_uploaded_file($rutaOrigen,$rutaDestino)){
                //     echo "Se guardo";
                // }
                //Que sea primero la primera condicion el enunciado de abajo
                //Hacer un else if para mandar
                /**
                 * LAS IMAGENES ESTAN MAL Y EL LOGIN IGUAL
                 * SOLUCIONAR LO ANTERIOR 
                 * Y LAS CONSULTAS DX
                */
            }
            $NOMBRE = $_POST["nombre-registro"];
            $APELLIDO = $_POST["apellido-registro"];
            $NOMBREUSUARIOUNICO = $_POST["nombreusuariounico"];
            $CORREO = $_POST["email-registro"];
            $CONTRASENIA = (string)$_POST["pass-registro"];
            $CONTRASENIA_CONFIRM = (string)$_POST["pass-conf-registro"];
            $TIPO = "admin";
            $CALLE_IDCALLE = $_POST["calle_idcalle"];
            $MUNICIPIO_IDMUNICIPIO = $_POST["municipio_idmunicipio"];
            $ESTADO_IDESTADO = $_POST["estado_idestado"];
            echo "<br>";
            echo "<br>";
            echo "<br>";
            print_r($_POST);
            //Filtramos las imagenes con un metodo de clase
            
            //LLenar los estados y esas cosas del territorio con la base de datos poblada
            //Se puede usar una api
            //Guardamos en la base de datos

            //ingresamos la informacion a la base de datos
            //Ver como agregar datos en tablas con llaves foraneas
            /*
             INSERT INTO `usuario` (`ID`, `NOMBRE`, `APELLIDO`, `NOMBREUSUARIO`, `CORREO`, `REFIMAGENPERFIL`, `TIPO`, `CONTRASENIA`, `TOTALPRODUCTOSVENDIDOS`, `CALLE_IDCALLE`, `MUNICIPIO_IDMUNICIPIO`, `ESTADO_IDESTADO`) VALUES (NULL, '$NOMBRE', '$APELLIDO', '$NOMBREUSUARIOUNICO', '$CORREO', '$REFIMGPERFIL', 'admin', '$CONTRASENIA', '0', '1', '1', '3');
             */
            //$query = "INSERT INTO usuario VALUES ('', '$NOMBRE', '$APELLIDO', '$NOMBREUSUARIOUNICO', '$CORREO', '$REFIMGPERFIL', '$TIPO', '$CONTRASENIA', '0', '1', '1', '1');";
            $query = "INSERT INTO `usuario` (`ID`, `NOMBRE`, `APELLIDO`, `NOMBREUSUARIO`, `CORREO`, `REFIMAGENPERFIL`, `TIPO`, `CONTRASENIA`, `TOTALPRODUCTOSVENDIDOS`, `CALLE_IDCALLE`, `MUNICIPIO_IDMUNICIPIO`, `ESTADO_IDESTADO`) VALUES (NULL, '$NOMBRE', '$APELLIDO', '$NOMBREUSUARIOUNICO', '$CORREO', '$REFIMGPERFIL', 'admin', '$CONTRASENIA', '0', '1', '1', '3');";
            
            //mysqli_query($link, "INSERT INTO usuarios VALUES('','$Nombre','$Usuario','$Password','Usuario')") or die("<h2>Error Guardando los datos</h2>");
            /*unir y mover las clases para el usuario y los archivos para el usuario */
            $registroUsuario->setContrasenia($CONTRASENIA);
            $registroUsuario->setConfirmContrasenia($CONTRASENIA_CONFIRM);
            try {
                if($registroUsuario->validateContrasenia()){
                    if(mysqli_query($conexion, $query)){
                        $rutaOrigen = $_FILES["refimgperfilusuarios"]["tmp_name"];
                        $rutaIndex = dirname(realpath(__FILE__),2);
                        $rutaDestino = $rutaIndex."\\assets\\imgprofileusers\\".$REFIMGPERFIL;
                        if(move_uploaded_file($rutaOrigen,$rutaDestino)){
                            echo "Se guardo";
                        }
                        echo "<br>";
                        echo "Ok";
                        $redireccion = "http://localhost/proyectoISoft/index.php";
                    }else{
                        echo "<br>";
                        echo "no ok";
                        //Y mandar un error
                        $redireccion = "http://localhost/proyectoISoft/registro.php";
                    }
                }   
                
            } catch (Error $e) {
                echo "Error";
                die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
            }
            $registroUsuario = null;
        //if($registroUsuario->tratamientoImagenes($_FILES)){}
}
    mysqli_close($conexion);
    
    header("Location: ".$redireccion);
    //header('Location: index.php');
?>