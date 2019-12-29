<?php
    /**
     * Esta clase me ayuda a hacer un query para mostrar productos
     * Se puede hacer general para cualquier tabla pasando esos parametros al metodo
     */
    class BusquedaProducto{
        private $producto;
        
        public function setProducto($producto){$this->producto = $producto;}
        public function getProducto(){return $this->producto;}
        public function queryDeProducto($conexion){
            $resultadoJson = array();
            $query = "SELECT nombre, precio, descripcion FROM productos WHERE nombre LIKE '$this->producto%';";
            $resultado = mysqli_query($conexion, $query);
            if(!$resultado){
                die("".mysqli_error($conexion));
            }else{
                while($preJson = mysqli_fetch_array($resultado)){
                    $resultadoJson[] = array(
                        "nombre"=>$preJson["nombre"],
                        "precio"=>$preJson["precio"],
                        "descripcion"=>$preJson["descripcion"]
                    );
                }
                mysqli_free_result($resultado);
                //mysqli_close($conexion);
            }
            //$resultadoJson = json_encode($resultadoJson);
            return $resultadoJson;
        }
        public function queryTodosProdutos($conexion){
            $resultadoJson = array();
            $query = "SELECT * FROM productos;";
            $resultado = mysqli_query($conexion, $query);
            if(!$resultado){
                $resultadoJson[] = array(
                    "id"=>"Not found",
                    "nombre"=>"Not found",
                    "precio"=>"Not found",
                    "descripcion"=>"Not found"
                );
                return $resultadoJson;
            }
            //$resultadoJson = json_encode($resultadoJson);
            return $resultado;
        }
    }
?>