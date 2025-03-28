<?php
    // Función sin parametros
    function saludar(){
        echo "Hola como estas?";
        echo "<br />";
    }
    saludar();

    // Función con parametros
    function sumarDosNumeros($num1, $num2){
        echo "El resultado de la suma es: " . ($num1 + $num2);
        echo "<br />";
    }
    sumarDosNumeros(5,4);

    // Función con parametros por defecto
    function saludarPorNombre($nombre = "Invitado"){
        echo "Hola como estas " . $nombre;
        echo "<br />";
    }
    saludarPorNombre();

    // Función con un único retornos
    function sumarTresNumeros($num1, $num2, $num3){
        return ($num1 + $num2 + $num3);
    }
    
    $resultado = sumarTresNumeros(5,4,54);
    echo "El resultado es: " . $resultado;
    echo "<br />";
    // Función con multiples retornos
    function dividir($num1, $num2){
        if($num2==0){
            return "No se puede dividir entre cero";
        }else{
            return ($num1/$num2);
        }
    }
    $resultadoDivision = dividir(9,0);
    echo "El resultado de la división es: " . $resultadoDivision;

?>