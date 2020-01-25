<?php
    //Conexion a la base de datos usnado MVC
    class Conexion{
        private $USUARIO = "root";
        private $CONTRASENIA  = "";
        private $SERVIDOR = "localhost";
        private $PUERTO  = "8080";
        private $NOMBREBD = "carritocompras";
        private $CONEXION;
        public static function conexion(){
            try{
                $CONEXION = new mysqli($this->SERVIDOR, $this->USUARIO, $this->CONTRASENIA, $this->NOMBREBD);
            }catch(Error $e){
                echo "Type error: ".$e;
            }
            return $CONEXION;
        }
    }
?>