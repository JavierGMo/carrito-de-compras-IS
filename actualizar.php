<?php session_start(); ?>    
<?php include("includes/header.php"); ?>
    <div class="d-flex justify-content-center flex-column w-75 my-4">
        <div class="">
            <!--nombre, precio, descripcion-->
            <!--action="./usuarios/subirproducusuario.php"-->
            <form>
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="NombreProd">Nombre producto</label>
                    <input type="text"  name="nombre_producto_usuario" class="form-control" id="nombre_producto_usuario_update" autocomplete="off">
                </div>
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="PrecioProd">Precio del producto</label>
                    <input type="number"  name="precio_producto_usuario" class="form-control" id="precio_producto_usuario_update" autocomplete="off">
                </div>
                <div class="form-group mx-2 mb-2 col-4">
                    <label for="DescripcionProd">Descripcion del producto</label>
                    <input type="text" name="desc_producto_usuario" class="form-control" id="desc_producto_usuario_update" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary ml-4" id="btn-update-producto">Actualizar producto</button>
            </form>
        </div><!--form update-->
        <div class="my-4 ml-4">
            <div>
                <a href="controlproductos.php">Vista productos</a>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
    <script src="js/updateproduct.js"></script>
</body>
</html>