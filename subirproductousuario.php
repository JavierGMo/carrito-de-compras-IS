<?php 
    include("includes/header.php");
    include("database/database.php");
    include('usuarios/estaregistrado.php');
?>

    <div class="w-75">
        <div>
            <!--nombre, precio, descripcion-->
            <!--action="./usuarios/subirproducusuario.php"-->
            <form method="POST">
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="NombreProd">Nombre producto</label>
                    <input type="text"  name="nombre_producto_usuario" class="form-control" id="nombre_producto_usuario" autocomplete="off">
                </div>
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="PrecioProd">Precio del producto</label>
                    <input type="number"  name="precio_producto_usuario" class="form-control" id="precio_producto_usuario" autocomplete="off">
                </div>
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="DescripcionProd">Descripcion del producto</label>
                    <input type="text" name="desc_producto_usuario" class="form-control" id="desc_producto_usuario" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" id="btn-subir-producto">Subir producto</button>
            </form>
        </div>
    </div>
    <div>
        <div>
            <a href="controlproductos.php">Vista productos</a>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
    <script src="js/delete-update.js" ></script>
    <!--Agregar con AJAX-->
    <script src="js/createproduct.js"></script>
</body>
</html>