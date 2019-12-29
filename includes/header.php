<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/proyectoISoft/css/style.css">
    <link rel="icon" href="/proyectoISoft/img/icons/svg/001-castle.svg"  type="image/svg">
    <title><?php echo "CRUD" ?></title>
</head>
<body>
<header class="bg-light pt-3 pb-3">
    <div class="d-flex flex-row justify-content-around">
        <div id="background-logo" class="w-25">
        </div><!--Imagen de la pagina-->
        <div class="d-flex flex-column w-50">
            <div class="mb-5">
                <form  method="GET" action="/proyectoISoft/productos.php" class="form-inline" >
                    <div class="w-75">
                        <input type="text" id="caja-buscar" name="caja-buscar" class="form-control-plaintext bg-white" placeholder="Busqueda...">
                    </div>
                    <button type="submit" id="btn-buscador" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>
            </div><!---Barra de busqueda-->
            <div class="d-flex flex-row justify-content-between">
                <div><a href="/proyectoISoft/index.php">Inicio</a></div>
                <div><a href="#">Ofertas</a></div>
                <div><a href="#">Ayuda</a></div>
            </div><!--nav enlaces-->
        </div><!--Enlaces y barra de busqueda-->
        <div class="position-relative">
            <?php if(!isset($_SESSION["usuario"])): ?>
                <div><a href="/proyectoISoft/login.php" id="icon-login-click">Login <i class="fa fa-user"></i></a></div><!--icono login pre-form-->
                <div><a href="/proyectoISoft/registro.php">Crear cuenta <i class="fa fa-user-plus"></i></a></div>
                <div><a href=""><i class="fa fa-shopping-cart"></i></a></div>
            <?php endif ?>
            <?php if(isset($_SESSION["usuario"])): ?>
                <div><a href="/proyectoISoft/cuenta/usuario/perfilusuario.php">Cuenta <i class="fa fa-user-circle"></i></a></div>
                <div><a href="#">Carrito<i class="fa fa-shopping-cart"></i></a></div>
                <div><a href="/proyectoISoft/controlproductos.php">Subir producto</a></div>
                <div><a href="/proyectoISoft/sesiones/sessionlogout.php">Cerrar sesion<i class="fa fa-sign-out"></i></a></div>
            <?php endif ?>
        </div><!--Login-->
    </div><!--contenedor navegacion-->
</header><!--header-->