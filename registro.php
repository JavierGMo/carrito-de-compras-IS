<?php
    include('includes/header.php');
    include('sesiones/noestaregistrado.php');
?>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div>
            <form action="usuarios/registrousuarios.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="refimgperfilusuarios">Imagen de perfil:</label>
                    <input type="file" class="form-control" name="refimgperfilusuarios" id="refimgperfilusuarios" placeholder="ejemplo@ejemplo.com" autocomplete="off">
                </div><!--input-->
                <div class="form-group">
                    <label for="nombre-registro">Nombre:</label>
                    <input type="text" class="form-control" name="nombre-registro" id="nombre-registro" placeholder="Nombre">
                </div><!--nombre-->
                <div class="form-group">
                    <label for="apellido-registro">Apellido:</label>
                    <input type="text" class="form-control" name="apellido-registro" id="apellido-registro" placeholder="Apellido">
                </div><!--apellido-->
                <div class="form-group">
                    <label for="tipo">Nombre de usuario</label>
                    <input type="text" class="form-control" name="nombreusuariounico" id="tipo" placeholder="Nombre de usuario" autocomplete="off">
                </div><!--NOmbre de usuario unico-->
                <div class="form-group">
                    <label for="emailLogin">Correo:</label>
                    <input type="email" class="form-control" name="email-registro" id="email-registro" placeholder="ejemplo@ejemplo.com" autocomplete="off">
                </div><!--correo-->
                <div class="form-group">
                    <label for="estado_idestado">Estado:</label>
                    <input type="text" class="form-control" name="estado_idestado" id="estado_idestado" placeholder="Estado" autocomplete="off">
                </div><!--Estado-->
                <div class="form-group">
                    <label for="municipio_idmunicipio">Municipio:</label>
                    <input type="text" class="form-control" name="municipio_idmunicipio" id="municipio_idmunicipio" placeholder="Municipio" autocomplete="off">
                </div><!--municipio-->
                <div class="form-group">
                    <label for="calle_idcalle">Calle:</label>
                    <input type="text" class="form-control" name="calle_idcalle" id="calle_idcalle" placeholder="Calle" autocomplete="off">
                </div><!--calle-->
                <div class="form-group">
                    <label for="pass-registro">Contraseña:</label>
                    <input type="password" class="form-control" name="pass-registro" id="pass-registro" placeholder="Contraseña">
                </div><!--inputs-->
                <div class="form-group">
                    <label for="pass-conf-registro">Confirmar contraseña:</label>
                    <input type="password" class="form-control" name="pass-conf-registro" id="pass-conf-registro" placeholder="Confirmar contraseña">
                </div><!--inputs-->
                <button type="submit" id="btn-registro-form" class="btn btn-primary">Registrar</button>
            </form>
        </div><!--contenedor para manipular el login-->
    </div><!--contenedor del form del registro-->
    <?php include("includes/footer.php") ?>
    <script src="js/acciones-generales.js"></script>
    <!--<script src="js/registro-script.js"></script>-->
</body>
</html>