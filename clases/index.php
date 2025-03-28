<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases en php</title>
</head>
<body>
    Clases en php
    <?php

        class Animal{
            private $peso = 0;
            private $tipo = "";
            private $ruido = "";

            public function __construct($peso, $tipo, $ruido){
                $this->peso = $peso;
                $this->tipo = $tipo;
                $this->ruido = $ruido;
            }

            public function hacerRuido(){
                echo "El ruido del animal es: " . $this->ruido;
            }

            public function imprimirValores(){
                echo "Peso: " . $this->peso . ' Lbs.<br />';
                echo "Tipo: " . $this->tipo . ' <br />';
                echo "Ruido: " . $this->ruido . ' <br />';
            }

            public function getPeso(){
                return $this->peso;
            }

            public function setPeso($peso){
                $this->peso = $peso;
            }
        }

        $caballo = new Animal(1200, "Caballo", "Relincha");
        $caballo->imprimirValores();
        echo "<br />";
        echo $caballo->getPeso();
        $caballo->setPeso(1500);
        echo "<br />";
        echo $caballo->getPeso();


        // Declaración de clase heredada
        class Perro extends Animal{
            public $tamanio = 0;

            public function __construct($peso, $tipo, $ruido, $tamanio){
                parent::__construct($peso, $tipo, $ruido);
                $this->tamanio = $tamanio;
            }

            public function imprimirValores(){
                parent::imprimirValores();
                echo "Tamaño: " . $this->tamanio . ' cm <br />';
            }
        }
        
        $max = new Perro(20, "Perro", "Ladra", 25);
        echo "<br />";
        $max->imprimirValores();

    ?>
</body>
</html>