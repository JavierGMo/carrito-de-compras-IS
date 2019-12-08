    <?php include("includes/header.php"); ?>
    
    <div class="my-3">
        <div>
            <a href="subirproductousuario.php">Agregar producto</a>
        </div>
    </div>
    <div class="w-75">
        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody id="tbody-read">
                    <?php
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
    <?php include("includes/footer.php"); ?>
    <script src="js/borrar.js" ></script>
    <script src="js/readproducts.js"></script>
    <!--<script src="js/leerproductos.js"></script>-->
</body>
</html>