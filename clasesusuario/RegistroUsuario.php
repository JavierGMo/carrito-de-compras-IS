<?php
 /*
        echo $_FILES['imagen1']['name'];
        echo $_FILES['imagen1']['tmp_name'];
        echo $_FILES['imagen1']['type'];
        echo $_FILES['imagen1']['size'];
        echo $_FILES['imagen1']['error'];
        Nombre del fichero subido.
        Nombre temporal asignado al fichero por el servidor. Este nombre es único y permite identificarlo dentro de la carpeta de temporales.
        Tipo MIME de fichero subido: jpg, png, gif, pdf, etc.
        Tamaño en bytes del fichero, si quisieramos calcular el tamaño a kilobytes deberíamos dividir entre 1024 y para pasar a megabytes volver a dividirlo entre 1024.
        Código de error de la subida, en nuestro caso 0 o UPLOAD_ERR_OK que indica que no se ha producido error alguno. Códigos de error subida de fichero.
         */
        /*unir y mover las clases para el usuario y los archivos para el usuario */
    class RegistroUsuario{
        private $refImg;
        private $contrasenia;
        private $confirmContrasenia;
        /* inicio getters y setters */
        public function getContrasenia():string{return $this->contrasenia;}
        public function getConfirmContrasenia():string{return $this->confirmContrasenia;}
        public function setContrasenia(string $contrasenia):void{$this->contrasenia = trim($contrasenia);}
        public function setConfirmContrasenia(string $confirmContrasenia):void{$this->confirmContrasenia = trim($confirmContrasenia);}
        /* fin getter y setters */
        public function tratamientoImagenes($infoImage):bool{
            if($infoImage["refimgperfilusuarios"]["error"]===UPLOAD_ERR_OK){
                $extencionesImagen = array(0=>"image/jpg",1=>"image/png", 2=>"image/jpeg");
                $typeImage = $infoImage["refimgperfilusuarios"]["type"];
                $tamanioImagen = $infoImage["refimgperfilusuarios"]["size"];
                $tamanioLimite = 1024*1024*8;
                if(in_array($typeImage, $extencionesImagen)){
                    if($tamanioImagen<$tamanioLimite){
                        return true;
                    }
                }
            }
            return false;   
        }
        public function nombreImagen($nombre, $tipoImg){
            $extension = explode('/', $tipoImg)[1];
            return ($nombre.'.'.$extension);
        }
        public function validateContrasenia():bool{
            //Retorna un booleano
           if(strcmp($this->getContrasenia(), $this->getConfirmContrasenia()) === 0){
               return true;
            }
            return false;
        }
    }
?>