<?php
    include_once('../../../database/database.php');
    class ActualizarDatos{
        private $nombre;
        private $apellido;
        private $password;
        private $correo;
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function getApellido(){
            return $this->apellido;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function getCorreo(){
            return $this->password;
        }
        public function queryUpdateDataUser($con){
            $query = "UPDATE datos SET nombre='$this->nombre', apellido='$this->apellido' WHERE correo='$this->correo';";
            $resultado = mysqli_query($con, $query);
            if($resultado){
                return true;
            }else{
                return false;
            }
        }
        public function queryUpdatePassUser($con){
            //Arreglar el query para poder actualizar el nombre haciendo una conexion a la nueva tabla
            $query = "UPDATE datos SET nombre='$this->nombre', apellido='$this->apellido' WHERE correo='$this->correo';";
            $resultado = mysqli_query($con, $query);
            if($resultado){
                $resultado->close();
                return true;
            }else{
                return false;
            }
        }
    }
    class DataValidate{
        private $arreglo;
        function __construct($arreglo){
            $this->arreglo = $arreglo;
        }
        function checkData(){
            foreach($this->arreglo as $clave=>$elemento){
                //aquimndaerror, no es una variable, es un valor
                //update: creo que ya no manda error
                if(!isset($this->arreglo[$clave])) return false;
            }
            return true;
        }
    }
    echo "hola";
    echo "<br>";
    //var_dump($_POST);
    $redireccion = "index.php";
    $dataValida = new DataValidate($_POST);
    var_dump($_POST);
    if(isset($_POST["correooculto"]) && isset($_POST["apellidoactualizar"])
        && isset($_POST["nombreactualizar"])){
        var_dump($_POST);
        $updateData = new ActualizarDatos();
        //$updateData->setNombre($_POST["nombreactualizar"]);
        $updateData->setNombre($_POST["nombreactualizar"]);
        $updateData->setApellido($_POST["apellidoactualizar"]);
        $updateData->setCorreo($_POST["correooculto"]);
        if($updateData->queryUpdateDataUser($conexion)){
            //mandar mensajes
            $redireccion = "cuenta/usuario/perfilusuario.php";
        }else{
            //mandar mensajes
            $redireccion = "ofertas.php";
        }
        $updateData = null;
    }else{
        //mandar mensajes
        $redireccion = "index.php";
    }
    $dataValida = null;
    mysqli_close($conexion);
    
    header("Location: /proyectoISoft/".$redireccion);
?>