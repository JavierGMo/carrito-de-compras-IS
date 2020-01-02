<?php
    //Conectamos a la base de datos
    include("../database/database.php");
    if(isset($_POST)){
        $NOMBRE = $_POST["nombre-registro"];
        $APELLIDO = $_POST["apellido-registro"];
        $CORREO = $_POST["email-registro"];
        $CONTRASENIA = $_POST["pass-registro"];
        $REFIMGPERFIL = $_POST["refimgperfilusuarios"];
        $TIPO = $_POST["tipo"];
        $CALLE_IDCALLE = $_POST["calle_idcalle"];
        $MUNICIPIO_IDMUNICIPIO = $_POST["municipio_idmunicipio"];
        $ESTADO_IDESTADO = $_POST["estado_idestado"];
         //Guardamos en la base de datos

        //ingresamos la informacion a la base de datos
        $query = "INSERT INTO usuarios VALUES('','$NOMBRE','$APELLIDO','$CORREO','$REFIMGPERFIL', '$TIPO',  '$CONTRASENIA','', '$CALLE_IDCALLE', ',$MUNICIPIO_IDMUNICIPIO', '$ESTADO_IDESTADO')";
        //mysqli_query($link, "INSERT INTO usuarios VALUES('','$Nombre','$Usuario','$Password','Usuario')") or die("<h2>Error Guardando los datos</h2>");
        try {
            mysqli_query($conexion, $query);
        } catch (Error $e) {
            die("<br><p> Registro no guardado, reintente ". mysqli_error($conexion)."</p>" );
        }   
    }
    mysqli_close($conexion);
    
    header("Location: http://localhost/proyectoISoft/index.php");
    //header('Location: index.php');
    /*
	echo'
		<script>
			location.href="index.php";
		</script>
	'
    */
?>