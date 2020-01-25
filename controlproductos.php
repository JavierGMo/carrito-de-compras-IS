<?php
    include_once("includes/header.php"); 
    include('sesiones/estaregistrado.php');
    include_once('database/database.php');
    include_once('classbusquedaproducto/BusquedaProducto.php');
?>
    <div class="d-flex flex-row my-3">
        <!--
        <div class="my-3">
            <div>
                <a href="subirproductousuario.php">Agregar producto</a>
            </div>
        </div>-->
        <!--espacio-->
        <div class="ml-2 mb-3 flex-grow-1">
            <div class="w-75">
                <form enctype="multipart/formdata">
                    <div class="form-group mx-1 mb-1">
                        <label for="DescripcionProd">Imagen del producto</label>
                        <input type="text" name="ref-img-producto" class="form-control" id="ref-img-producto" autocomplete="off">
                    </div><!--Imagen del producto-->
                    <div class="form-group mx-1 mb-1 ">
                        <label for="NombreProd">Nombre producto</label>
                        <input type="text"  name="nombre_producto_usuario" class="form-control" id="nombre_producto_usuario" autocomplete="off">
                    </div><!--Nombre del producto-->
                    <div class="form-group mx-1 mb-1 ">
                        <label for="PrecioProd">Precio del producto</label>
                        <input type="number"  name="precio_producto_usuario" class="form-control" id="precio_producto_usuario" autocomplete="off">
                    </div><!--Precio del producto-->
                    <div class="form-group mx-1 mb-1 ">
                        <label for="DescripcionProd">Descripcion del producto</label>
                        <input type="text" name="desc_producto_usuario" class="form-control" id="desc_producto_usuario" autocomplete="off">
                    </div><!--Descripcion del producto-->
                    <div class="form-group mx-1 mb-1">
                        <label for="categoria_idcategoria">Categoria del producto</label>
                        <input type="text" name="categoria_idcategoria" class="form-control" id="categoria_idcategoria" autocomplete="off">
                    </div><!--Categoria del producto-->
                    <div class="form-group mx-1 mb-1">
                        <label for="proveedor_id">Proveedor del producto</label>
                        <input type="text" name="proveedor_id" class="form-control" id="proveedor_id" autocomplete="off">
                    </div><!--Proveedor del producto-->
                    <button type="submit" class="btn btn-primary ml-1" id="btn-subir-producto">Subir producto</button>
                </form>
            </div>
        </div><!--form create product-->
        <div class="w-75 pr-2">
            <div>
                <table class="table table-sm table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-read">
                        <?php
                            try {
                                //AGREGAR EL CODIGO CUANDO SOLO SEA UN PRODUCTO
                                //EN LA CLASE DE BusquedaProducto
                                //mover todo lo relacionado con las cosas del usuario
                                $queyTodosLosProductos = new BusquedaProducto();
                                $jsonProductos = $queyTodosLosProductos->queryTodosProdutos($conexion);
                                while($producto = mysqli_fetch_array($jsonProductos)):
                                    echo '<tr>
                                            <td>'.$producto["ID"].'</td>
                                            <td>'.$producto["NOMBREPRODUCTO"].'</td>
                                            <td>'.$producto["DESCRIPCION"].'</td>
                                            <td>$'.$producto["PRECIO"].'</td>
                                            <td><a href="actualizar.php?id='.$producto["ID"].'" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                                            <td><a href="" class="btn btn-danger" onclick="borrar('.$producto["ID"].')"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>';
                                endwhile;
                                $conexion->close();
                                $queyTodosLosProductos = null;
                            } catch (\Throwable $th) {
                                echo '<div class="mr-2 ml-2">
                                        <div><p class="h3">Algo salio mal :C</p></div>
                                    </div>';
                            }
                            /*
                            $query = "SELECT * FROM productos";
                            $resultado = mysqli_query($conexion, $query);
                            if(!$resultado){
                                die("Query error".mysqli_error($conexion));
                            }
                            while($vectorConsulta = mysqli_fetch_array($resultado)){
                                echo '<tr>';
                                    echo '<td>'.$vectorConsulta["id"].'</td>';
                                    echo '<td>'.$vectorConsulta["nombre"].'</td>';
                                    echo '<td>'.'$'.$vectorConsulta["precio"].'</td>';                            
                                    echo '<td>'.$vectorConsulta["descripcion"].'</td>';
                                    echo '<td><a href="" class="btn btn-primary" onclick="actualizar('.$vectorConsulta["id"].')"><i class="fa fa-pencil"></i></a></td>';
                                    echo '<td><a href="" class="btn btn-danger" onclick="borrar('.$vectorConsulta["id"].')"><i class="fa fa-trash-o"></i></a></td>';
                                echo '</tr>';
                            }
                            mysqli_close($conexion);
                            //$conexion->close();
                            */
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include_once("includes/footer.php"); ?>
    <script src="js/createproduct.js"></script>
    <script src="js/borrar.js" ></script>
    <!--<script src="js/readproducts.js"></script>-->
    <!--<script src="js/leerproductos.js"></script>-->
</body>
</html>