<?php
    class Usuario{
        private $rutaImagen;
        public function rutaImagen($conexion, string $NOMBREUSUARIO){
            $refImagen = "";
            $query = "SELECT REFIMAGENPERFIL FROM usuario WHERE NOMBREUSUARIO = '$NOMBREUSUARIO';";
            $resBD = mysqli_query($conexion, $query);
            if($resBD){
                $refImagen = mysqli_fetch_array($resBD);
            }else{
                $refImagen = "notfound.jpg";
            }
            return $refImagen;
        }
    }
?>