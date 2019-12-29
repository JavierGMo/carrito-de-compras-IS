<?php
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
?>