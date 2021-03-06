<?php 
    include('includes/header.php');
    include('sesiones/noestaregistrado.php');
?>
    <main>
        <div class="d-flex justify-content-center m-5">
            <form action="sesiones/sessionstar.php" method="POST">
                <div class="mb-4">
                    <label for="usuarionamelogin">Correo:</label>
                    <input type="text" class="form-control" id="usuarionamelogin" name="usuarionamelogin" placeholder="correo o usuario" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="passworsLogin">Contraseña:</label>
                    <input type="password" class="form-control" id="passworsLogin" name="passworsLogin" placeholder="Contraseña">
                </div>
                <button class="btn btn-primary" id="btn-inicia-sesion">Iniciar sesion</button>
            </form>
        </div><!--para el login-->
        <div class="mt-3">
            <div class="d-flex justify-content-center">
                <div><p class="mr-1">No tienes cuenta:</p></div>
                <div><a href="registro.html"><span class="text-primary">Crear cuenta</span></a></div>                
            </div>
        </div><!--para registrar usuario-->
    </main>
    <?php include("includes/footer.php") ?>
    <script src="js/acciones-generales.js"></script>
    <!--<script src="js/control-forms.js"></script>-->
</body>
</html>