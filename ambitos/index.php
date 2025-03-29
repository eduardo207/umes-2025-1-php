<?php

    class EjemploAmbitos{
        public $variableGlobalNombre = "Eduardo";
        public static $variableEstatica = "Mi variable estatica";

        public function funcionSaludar(){
            $variableLocal = "Variable local";
            echo $this->variableGlobalNombre;
            echo "<br />";
            echo $variableLocal;
        }

        public function funcionDos(){
            echo $this->variableGlobalNombre;
            echo "<br />";
            $edad = 26;

            if($edad >= 18){
                $variableLocalDeIf = "Variable local de la sentencia if";
                echo "<br />";
                echo "Es mayor de edad";
                echo "<br />";
                echo $variableLocalDeIf;
            }else{
                echo "<br />";
                echo "Es menor de edad";
                echo "<br />";
                echo $variableLocalDeIf;
            }
        }

        public static function miFuncionEstatica(){
            echo "<br />";
            echo "<br />";
            echo "texto estatico";
            echo "<br />";
            echo self::$variableEstatica;
        }

    }

    $objetoEjemploAmbitos = new EjemploAmbitos();
    $objetoEjemploAmbitos->funcionSaludar();
    $objetoEjemploAmbitos->funcionDos();

    EjemploAmbitos::miFuncionEstatica();

?>