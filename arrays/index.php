<?php

    $colores = ["rojo","verde","azul"];
    print_r($colores);

    echo "<br />";

    $colores2[] = "rojo"; 
    array_push($colores2, "verde");
    array_push($colores2, 24);
    print_r($colores2);
    
    echo "<br />";
    for($num=0; $num<count($colores2); $num++){
        echo $colores2[$num] . ",";
    }

    echo "<br />";
    foreach($colores2 as $color){
        echo $color . ",";
    }
    echo "<br />";
    echo "el indice es: " . array_search(24,$colores2);

?>