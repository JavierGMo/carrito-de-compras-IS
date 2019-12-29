<?php include_once('includes/header.php'); ?>
<?php include('database/database.php'); ?>
<?php include('classbusquedaproducto/BusquedaProducto.php'); ?>
<div class="d-flex mb-4"><!--pendiente en el css con background image-->
    <div class="d-flex flex-column">
        <div class="pl-3"><p class="display-4">Titulo del bac</p></div><!--titulo de la categoria-->
        <div class="d-flex flex-column text-center justify-content-center" id="cont-productos">
            <?php
                if(isset($_GET["caja-buscar"])):
                    if($_GET["caja-buscar"] !== ""):
                        $producto = $_GET["caja-buscar"];
                        $busquedaProducto = new BusquedaProducto();
                        $busquedaProducto->setProducto($producto);
                        $jsonProductos = $busquedaProducto->queryDeProducto($conexion);
                        mysqli_close($conexion);
                        foreach($jsonProductos as $producto):
                            echo '
                            <div class="mr-2 ml-2">
                                <img src="img/ref" alt="Imagenes productos" class="imagen-producto">
                                <div><p class="h3">Nombre: '.$producto["nombre"].'</p></div>
                                <div><p class="h4">Precio: $'.$producto["precio"].'</p></div>
                                <div><p class="h5">Descripcion: '.$producto["descripcion"].'</p></div>
                            </div>';
                        endforeach;
                        $busquedaProducto = null;
                    else:
                        echo '<div class="mr-2 ml-2">
                                <img src="img/ref" alt="Not found" class="imagen-producto">
                                <div><p class="h3">No se encontro :c </p></div>
                            </div>';
                    endif;
                else:
                    echo '<div class="mr-2 ml-2">
                            <img src="img/ref" alt="Not found" class="imagen-producto">
                            <div><p class="h3">No se encontro :c </p></div>
                        </div>';
                endif;
            ?>
        </div><!--imagenes de fondo de los productos-->
    </div><!--contenido textos imagenes-->
</div><!--imagenes de los productos y titulos de las categorias-->
<?php include_once('includes/footer.php'); ?>
<!--<script src="js/busquedaproducto.js"></script>-->