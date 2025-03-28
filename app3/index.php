<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Mostrar los números primos del 1 al 1000.
        for($num=1; $num<=1000; $num++){
            $contador = 0;
            for($num2=1; $num2<=$num; $num2++){
                if($num%$num2==0){
                    $contador++;
                }
            }
            if($contador==2){
                echo "$num ";
            }
        }

        //Dibujar la siguiente figura en pantalla segun un parametro númerico indicado
        $parametro=5;
        echo "<br />";
        for($num=1; $num<=($parametro-1); $num++){
            for($num2=1; $num2<=$num; $num2++){
                echo "*";
            }
            echo "<br />";
        }
        for($num=1; $num<=$parametro; $num++){
            echo "+";
        }
        echo "<br />";
        for($num=($parametro-1); $num>=1; $num--){
            for($num2=1; $num2<=$num; $num2++){
                echo "*";
            }
            echo "<br />";
        }
    ?>
</body>
</html>