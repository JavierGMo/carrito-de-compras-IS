<?php 
    include('../../includes/header.php');
?>
<div>
    <div>
        <div>
            <img src="../../img/" alt="foto de perfil">
            <p><?php echo $_SESSION["usuario"]["nombre"]." ".$_SESSION["usuario"]["apellido"]; ?></p>
            <p><?php 
                echo date("F");
                echo date("d");
                ?>
            </p>
        </div>
    </div>
    <div>
        <a href="../../controlproductos.php">Subir producto</a>
    </div>
    <div>
        <div><a href="#">Cambiar contraseñas</a></div>
    </div>
</div>
<?php
    include('../../includes/footer.php');
?>