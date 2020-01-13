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
                    <label for="DescripcionProd">Imagen del productp</label>
                    <input type="text" name="ref-img-producto" class="form-control" id="ref-img-producto" autocomplete="off">
                </div><!--Imagen del producto-->
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="NombreProd">Nombre producto</label>
                    <input type="text"  name="nombre_producto_usuario" class="form-control" id="nombre_producto_usuario" autocomplete="off">
                </div><!--Nombre del producto-->
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="PrecioProd">Precio del producto</label>
                    <input type="number"  name="precio_producto_usuario" class="form-control" id="precio_producto_usuario" autocomplete="off">
                </div><!--Precio del producto-->
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="DescripcionProd">Descripcion del producto</label>
                    <input type="text" name="desc_producto_usuario" class="form-control" id="desc_producto_usuario" autocomplete="off">
                </div><!--Descripcion del producto-->
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="categoria_idcategoria">Categoria del producto</label>
                    <input type="text" name="categoria_idcategoria" class="form-control" id="categoria_idcategoria" autocomplete="off">
                </div><!--Categoria del producto-->
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="proveedor_id">Proveedor del producto</label>
                    <input type="text" name="proveedor_id" class="form-control" id="proveedor_id" autocomplete="off">
                </div><!--Proveedor del producto-->
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