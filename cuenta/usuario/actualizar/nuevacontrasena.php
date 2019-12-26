<?php
    include('../../../includes/header.php');
?>
<div>
    <div class="mx-4 my-3">
        <div class="d-flex justify-content-center m-5">
            <form action="/proyectoISoft/cuenta/usuario/peticionesusuario/nuevopass.php" method="POST">
            <input type="text" class="form-control" name="emailidentificador" id="emailidentificador" value=<?php echo '"'.$_GET["correoc"].'"'; ?> hidden>
                <div class="mb-4">
                    <label for="passwordactualizar">Contraseña nueva</label>
                    <input type="password" class="form-control" name="passwordactualizar" id="passwordactualizar" placeholder="Contraseña">
                </div><!--input para nombre-->
                <div class="mb-4">
                    <label for="confirmpasswordactualizar">Confirmar contraseña</label>
                    <input type="password" class="form-control" name="confirmpasswordactualizar" id="confirmpasswordactualizar" placeholder="Nueva contraseña">
                </div><!--input para apellido-->
                <button type="submit" class="btn btn-primary mb-2">Cambiar contraseña</button>
            </form>
        </div>
    </div>
</div>
<?php include('../../../includes/footer.php'); ?>