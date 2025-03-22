<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - 21-marzo-2025</title>
</head>
<body>
    <?php
        // Ejemplo de la sentencia IF
        $edadPersona = 16;
        echo "<h3>La edad de la persona es: $edadPersona años</h3>";
        if ($edadPersona < 18) {
            echo "<h2>La persona es menor de edad</h2>";
        }else if ($edadPersona < 65){
            echo "<h2>La persona es mayor de edad</h2>";
        }else{
            echo "<h2>La persona es de la 3ra edad</h2>";
        }
        // Ejemplo de setencia IF en una sola línea
        $mensaje = "";
        ($edadPersona < 18) ? $mensaje = "La persona es menor de edad" : (($edadPersona < 65) ? $mensaje = "La persona es mayor de edad" : $mensaje = "La persona es de la 3ra edad");
        echo "<h2>$mensaje</h2>";
        
        // Ejemplo de la sentencia SWITCH
        $diaSemana = "lunes";
        echo "<h3>El día de la semana es: $diaSemana</h3>";

        switch ($diaSemana){
            case "lunes":
                echo "<h2>Es el inicio de la semana</h2>";
                break;
            case "martes":
                echo "<h2>Es día martes, animo!</h2>";
                break;
            case "miercoles":
                echo "<h2>Es día miercoles, cintura de semana.</h2>";
                break;
            case "jueves":
                echo "<h2>Ya casi es viernes.</h2>";
                break;
            case "viernes":
                echo "<h2>Por fin es dia viernes.</h2>";
                break;
            case "sabado":
                echo "<h2>Sabado de fin de semana.</h2>";
                break;
            case "domingo":
                echo "<h2>Domingo de fin de semana</h2>";
                break;
            default:
                echo "<h2>El día no existe</h2>";
                break;
        }

        // Ejemplo de la sentencia WHILE        
        /* 
            Imprimir en pantalla todos los números de 5 en adelante hasta que se
            cumpla la condición de llegar al número 30.
        */
        $numero = 1;
        while ($numero <=30){
            $salida = "";
            // OPCION CON IF RESUMIDO
            ($numero >= 5) ? $salida = $numero . " " : $salida = "";
            // OPCION CON IF NORMAL
            if ($numero >= 5){
                $salida = $numero . " ";
            }else{
                $salida = "";
            }
            echo $salida;
            $numero = $numero + 1;
        }
        echo "<br />";
        // Ejemplo de la sentencia DO-WHILE
        $numero = 1;
        do{
            $salida = "";
            // OPCION CON IF RESUMIDO
            ($numero >= 5) ? $salida = $numero . " " : $salida = "";
            // OPCION CON IF NORMAL
            if ($numero >= 5){
                $salida = $numero . " ";
            }else{
                $salida = "";
            }
            echo $salida;
            $numero = $numero + 1;
        }while ($numero <=30);

    
        /*
            Imprimir en pantalla los numeros de 5 a 100 
        */
        echo "<br />----- SALIDA EN PANTALLA DE LA SETENCIA WHILE: --------<br />";
        $numero = 1;
        while($numero>=5){
            echo $numero . " ";
            $numero = $numero + 10;
        }
        echo "<br />---- SALIDA EN PANTALLA DE LA SETENCIA DO-WHILE: -------<br />";
        $numero = 1;
        do{
            echo $numero . " ";
            $numero = $numero + 10;
        }while($numero>=5 && $numero<=30);
        echo "<br />--------------------------------------------------------<br />";

        // Ejemplo de la setencia FOR
        /*
            FOR DECREMENTAL
            Imprimir en pantalla todos los números de 40 en reversa hasta que se
            cumpla la condición de llegar a 5.
        */
        for ($numero = 40; $numero >=5; $numero = $numero - 1){
            echo $numero . " ";
        }
        /*
            FOR INCREMENTAL
            Imprimir en pantalla todos los números de 10 hasta 50 de dos en dos
        */
        echo "<br />";
        for ($numero = 10; $numero <=50; $numero = $numero + 2){
            echo $numero . " ";
        }
        echo "<br />";
    ?>
</body>
</html>