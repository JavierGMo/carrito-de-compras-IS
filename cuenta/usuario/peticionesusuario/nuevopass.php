<?php
    session_start();
    include_once('../../../database/database.php');
    /**hacer pruebas para ver que hace la conexion en las clases
     * sin ser un parametro en los metodos y
     * si se pasa como parametro hacerla null y volver a usarla
     * fuera de la clase
     */
    class ActualizarDatos{
        private $nombre;
        private $apellido;
        private $password;
        private $passwordConfirm;
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
        public function setPasswordConfirm($passwordConfirm){
            $this->passwordConfirm = $passwordConfirm;
        }
        public function getPasswordConfirm(){
            return $this->passwordConfirm;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function getCorreo(){
            return $this->password;
        }
        public function validateEmail($con){

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
        private function queryUpdatePassUser($con){
            //Arreglar el query para poder actualizar el nombre haciendo una conexion a la nueva tabla
            $query = "UPDATE datos SET password='$this->password' WHERE correo='$this->correo';";
            $resultado = mysqli_query($con, $query);
            if($resultado){
                return true;
            }else{
                return false;
            }
        }
        public function validatePassword($con){
            if(strcmp($this->getPassword(), $this->getPasswordConfirm()) === 0){
                return $this->queryUpdatePassUser($con);
            }
            return false;
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
    //confirmpasswordactualizar
    //passwordactualizar
    $redireccion = "index.php";
    if(isset($_POST["passwordactualizar"]) &&
         isset($_POST["confirmpasswordactualizar"]) &&
         isset($_POST["emailidentificador"])){
        $updatePassUser = new ActualizarDatos();
        $updatePassUser->setCorreo($_POST["emailidentificador"]);
        $updatePassUser->setPassword($_POST["passwordactualizar"]);
        $updatePassUser->setPasswordConfirm($_POST["confirmpasswordactualizar"]);
        if($updatePassUser->validatePassword($conexion)){
            session_unset();
            session_destroy();
            $redireccion = "index.php";
        }else{
            $redireccion = "proyectoISoft/cuenta/usuario/perfilusuario.php";
        }
        //proyectoISoft/cuenta/usuario/perfilusuario.php
        //header("Location: /proyectoISoft/".$redireccion);
    }
    header("Location: /proyectoISoft/".$redireccion);
?>