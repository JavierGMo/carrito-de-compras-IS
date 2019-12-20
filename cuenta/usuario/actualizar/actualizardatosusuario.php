<?php
    include('../../../includes/header.php');
?>
<div>
    <div class="mx-4 my-3">
        <div class="d-flex justify-content-center m-5">
            <form action="/proyectoISoft/cuenta/usuario/peticionesusuario/actualizardatos.php" method="POST">
                <div class="mb-4">
                    <label for="emailsololeer">Email</label>
                    <input type="text" readonly class="form-control-plaintext border border-success rounded p-1" value="aquivaelemail@em.com">
                </div><!--input only-read para email-->
                <div class="mb-4">
                    <label for="nombreusuarioreadonly">Nombre de usuario</label>
                    <input type="text" readonly class="form-control-plaintext border border-success rounded p-1" value="nombreusuario">
                </div><!--input only-read para email-->
                <div class="mb-4">
                    <label for="nombreactualizar">Nombre</label>
                    <input type="text" class="form-control" name="nombreactualizar" id="nombreactualizar" placeholder="Nombre">
                </div><!--input para nombre-->
                <div class="mb-4">
                    <label for="apellidoactualizar">Apellido</label>
                    <input type="text" class="form-control" name="apellidoactualizar" id="apellidoactualizar" placeholder="Apellido">
                </div><!--input para apellido-->
                <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>
<?php
    include('../../../includes/footer.php');
?>