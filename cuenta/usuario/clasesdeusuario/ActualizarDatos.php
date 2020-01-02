<?php
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
        public function queryUpdateDataUser($con){
            $query = "UPDATE usuario SET NOMBRE='$this->nombre', APELLIDO='$this->apellido' WHERE CORREO='$this->correo';";
            $resultado = mysqli_query($con, $query);
            if($resultado){
                return true;
            }else{
                return false;
            }
        }
        public function queryUpdatePassUser($con){
            //Arreglar el query para poder actualizar el nombre haciendo una conexion a la nueva tabla
            $query = "UPDATE usuario SET CONTRASENIA='$this->password' WHERE CORREO='$this->correo';";
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
?>