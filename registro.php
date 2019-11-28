<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro usuario</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div>
            <form action="usuarios/registrousuarios.php" method="POST" >
                <div class="form-group">
                    <label for="nombre-registro">Nombre:</label>
                    <input type="text" class="form-control" name="nombre-registro" id="nombre-registro" placeholder="Nombre">
                </div><!--input-->
                <div class="form-group">
                    <label for="apellido-registro">Apellido:</label>
                    <input type="text" class="form-control" name="apellido-registro" id="apellido-registro" placeholder="Apellido">
                </div><!--input-->
                <div class="form-group">
                    <label for="emailLogin">Correo:</label>
                    <input type="email" class="form-control" name="email-registro" id="email-registro" placeholder="ejemplo@ejemplo.com" autocomplete="off">
                </div><!--input-->
                <div class="form-group">
                    <label for="passworsLogin">Contraseña:</label>
                    <input type="password" class="form-control" name="pass-registro" id="pass-registro" placeholder="Contraseña">
                </div><!--inputs-->
                <div class="form-group">
                    <label for="passworsLogin">Confirmar contraseña:</label>
                    <input type="password" class="form-control" id="pass-conf-registro" placeholder="Confirmar contraseña">
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