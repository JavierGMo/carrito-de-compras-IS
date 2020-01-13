<?php 
    include('../../includes/header.php');
?>
<div class="py-3">
    <div class="d-flex flex-row justify-content-around">
        <div class="d-flex flex-row justify-content-around">
            <div class="pr-3"><a href="#">Mensajes<i class="fa fa-envelope-o"></i></a></div>
            <div class="pr-3"><a href="#">Notificaciones <i class="fa fa-bell"></i></a></div>
            <div class="pr-3"><a href="#">Pendiente</a></div>
        </div>
        <div>
            <div class="d-flex flex-row justify-content-around">
                <div class="pr-3">img</div>
                <div class="pr-3"><?php echo $_SESSION["usuario"]["NOMBRE"]; ?></div>
            </div>
        </div>
    </div>
</div><!--mini header para mensajes, notificaciones y otras cosas para el usuario-->
<div>
    <div class="d-flex flex-column text-center py-4">
        <div class="py-5 cont-imagen-usuario-panel">
            <img src="/proyectoISoft/img/gits.jpg" class="h-25 w-25 img-thumbnail" alt="foto de perfil">
        </div>
        <div>
            <div>
                <p><?php echo $_SESSION["usuario"]["NOMBRE"]." ".$_SESSION["usuario"]["APELLIDO"]; ?></p>
                <p><?php 
                    echo date("F");
                    echo date("d");
                    ?>
                </p>
                <p>Numeros de productos vendidos: </p>
                <p><a href="#">Cuales se han vendido <i class="fa fa-usd"></i></a></p>
            </div>
        </div><!--Para productos vendidos-->
        <div>
            <a href="/proyectoISoft/controlproductos.php">Subir producto <i class="fa fa-level-up"></i></a>
        </div>
        <div>
            <!--"/proyectoISoft/cuenta/usuario/actualizar/actualizardatosusuario.php?"-->
            <div><a href=<?php echo '"/proyectoISoft/cuenta/usuario/actualizar/actualizardatosusuario.php?correo='.$_SESSION["usuario"]["CORREO"].'"';?>>Actualizar datos <i class="fa fa-pencil-square-o"></i></a></div>
        </div>
        <div>
            <div><a href=<?php echo '"/proyectoISoft/cuenta/usuario/actualizar/nuevacontrasena.php?correoc='.$_SESSION["usuario"]["CORREO"].'"';?>>Cambiar contraseñas<i class="fa fa-cog"></i></a></div>
        </div>
    </div>
</div>
<?php include('../../includes/footer.php'); ?>