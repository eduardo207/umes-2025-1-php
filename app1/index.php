<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo PHP</title>
</head>
<body>
    Este es mi primer ejemplo de php
    <br />
    <?php
        // Esto es un comentario de una sola línea
        echo "Hola mundo en comilla doble";
        # Esto es otro comentario de una sola linea
        echo "<br />";
        /*
            La siguiente funcion realiza un ordenamiento entre una matriz de componentes
            los cuales se alimentan de la base de datos RH_EMPLEADO y les calcula
            sus bonos salariales del mes de diciembre.
        */
        echo 'Hola mundo en comilla simple';

        $variableUno = 1;
        echo "<br />";
        echo $variableUno;

        // Declaración de variable en formato CamelCase
        $nombreCompletoUsuario = "Juan Perez";
        // Declaración de variable en formato LowerCase
        $nombrecompletousuario = "Juan Perez";
        // Declaración de variable en formato UpperCase
        $NOMBRE_COMPLETO_USUARIO = "Juan Perez";

        // Declaración de variables numéricas
        $varUnoNumerica = 5;
        $varDosNumerica = 10;
        $varTresResultadoNumerico = $varUnoNumerica + $varDosNumerica;
        echo "<h1>El resultado de la suma es: $varTresResultadoNumerico</h1>";

        // Declaración de variables de texto
        $varUnoTexto = "Hola";
        $varDosTexto = "Mundo";
        $varTresResultadoTexto = $varUnoTexto . " " . $varDosTexto;
        echo "<h1>El resultado de la concatenación es: $varTresResultadoTexto</h1>";

        // Declaración de variables booleanas
        $varUnoBooleana = true;
        $varDosBooleana = true;
        $varTresResultadoBooleano = $varUnoBooleana && $varDosBooleana;
        echo "<h1>El resultado de la operación booleana es: $varTresResultadoBooleano</h1>";
        /*
            Operadores lógicos:
            NOT (Negación)  !
            AND (Y) &&
            OR (O)  ||
            XOR (O exclusivo) xor
        */


        /*
            PRESEDENCIA DE OPERADORES ARITMÉTICOS
            / division
            * multiplicacion
            + suma
            - resta
        */

        $varEjemploPresedencia = (5 + 3) * 2;
        echo "<h1>El resultado de la presedencia es: $varEjemploPresedencia</h1>";

        /*
            PRESEDENCIA DE OPERADORES LÓGICOS:
            NOT (Negación)  !
            AND (Y) &&
            OR (O)  ||
            XOR (O exclusivo) xor
        */
        $varEjemploPresedencia = (true || true) && false;
        echo "<h1>El resultado de la presedencia es: $varEjemploPresedencia</h1>";
        $varEjemploPresedencia = true || true && false;
        echo "<h1>El resultado de la presedencia es: $varEjemploPresedencia</h1>";
    ?>
</body>
</html>