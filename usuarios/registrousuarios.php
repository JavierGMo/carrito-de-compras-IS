<?php
    //Conectamos a la base de datos
    include("../database/database.php");
    include_once('../clasesusuario/RegistroUsuario.php');
    if(isset($_POST["nombre-registro"]) && isset($_POST["apellido-registro"]) 
        && isset($_POST["email-registro"]) && isset($_POST["pass-registro"]) 
        && isset($_POST["pass-conf-registro"]) && isset($_POST["nombreusuariounico"])){
        //Modificar esta clase para que gaurde al usuario
            $REFIMGPERFIL = "default.jpg";
            var_dump($_FILES);
            echo "<br>";
            var_dump($_FILES);
            
            $registroUsuario = new RegistroUsuario();
            if($registroUsuario->tratamientoImagenes($_FILES)){
                $REFIMGPERFIL = $_FILES["refimgperfilusuarios"]["name"];
                $rutaOrigen = $_FILES["refimgperfilusuarios"]["tmp_name"];
                $rutaIndex = dirname(realpath(__FILE__),2);
                $rutaDestino = $rutaIndex."\\assests\\imgprofileusers\\".$REFIMGPERFIL;
                if(move_uploaded_file($rutaOrigen,$rutaDestino)){
                    echo "Se guardo";
                }
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
            $CONTRASENIA = $_POST["pass-registro"];
            $CONTRASENIA_CONFIRM = $_POST["pass-conf-registro"];
            $TIPO = "admin";
            $CALLE_IDCALLE = $_POST["calle_idcalle"];
            $MUNICIPIO_IDMUNICIPIO = $_POST["municipio_idmunicipio"];
            $ESTADO_IDESTADO = $_POST["estado_idestado"];
            //Filtramos las imagenes con un metodo de clase
            
            //LLenar los estados y esas cosas del territorio con la base de datos poblada
            //Se puede usar una api
            //Guardamos en la base de datos

            //ingresamos la informacion a la base de datos
            $query = "INSERT INTO usuario VALUES('','$NOMBRE', '$APELLIDO', '$NOMBREUSUARIOUNICO', '$CORREO', '$REFIMGPERFIL', '$TIPO', '$CONTRASENIA','0', '1', ',1', '1');";
            echo "se guardo usuario";
            //mysqli_query($link, "INSERT INTO usuarios VALUES('','$Nombre','$Usuario','$Password','Usuario')") or die("<h2>Error Guardando los datos</h2>");
            try {
                mysqli_query($conexion, $query);
                $registroUsuario = null;
                echo "Ok";
            } catch (Error $e) {
                echo "Error";
                die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
            } 
        //if($registroUsuario->tratamientoImagenes($_FILES)){}
}
    mysqli_close($conexion);
    
    //header("Location: http://localhost/proyectoISoft/index.php");
    //header('Location: index.php');
    /*
	echo'
		<script>
			location.href="index.php";
		</script>
	'
    */
?>