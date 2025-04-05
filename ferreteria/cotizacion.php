
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $descripcion = $_POST['descripcion'];

        echo "<h2>Gracias por tu solicitud de cotización, $nombre.</h2>";
        echo "<p>Hemos recibido tu solicitud de cotización y se te estará enviando a la brevedad posible al correo $correo</p>";

        // Verifica si el directorio existe
        (!is_dir('cotizaciones')) ? mkdir('cotizaciones') : '';
        // Navegamos a la carpeta
        chdir('cotizaciones');
        // Creamos el archivo de cotización
        $archivo = fopen('cotizaciones.txt','a+');
        // Escribimos en el archivo
        fwrite($archivo, "$nombre, $telefono, $correo, $descripcion \n");
        fclose($archivo);
        
    }
?>
