<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div class="d-flex justify-content-center m-5">
            <form action="usuarios/sesion.php" method="POST">
                <div class="mb-4">
                    <label for="emailLogin">Correo:</label>
                    <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="ejemplo@ejemplo.com" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="passworsLogin">Contraseña:</label>
                    <input type="password" class="form-control" id="passworsLogin" name="passworsLogin"placeholder="Contraseña">
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