<?php
    // Manipulación de directorios en PHP
    if (is_dir('cotizaciones')){
        echo "El directorio 'cotizaciones' ya existe.";
    }else{
        echo "El directorio 'cotizaciones' NO existe.";
        mkdir('cotizaciones');
        echo "<br /> El directorio 'cotizaciones' ha sido creado.";
    }

    // Creando carpeta de galeria
    (!is_dir('galeria')) ?  mkdir('galeria'): '';

    $archivos = scandir('galeria');
    foreach($archivos as $archivo){
        echo "<br />Archivo: " . $archivo;
    }

    // Leyendo directorio utilizando opendir y readdir
    $directorio = opendir('galeria');
    do{
        $archivo = readdir($directorio);
        echo "<br />Archivo: " . $archivo;
    }while($archivo);

    closedir('galeria');

    // Path de directorio creado
    chdir('cotizaciones');
    echo "<br />El path del directorio creado es: " . getcwd();

    

?>