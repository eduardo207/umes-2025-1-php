<?php
    $host = "mi-bd"; // IP del servidor
    $port = "3306"; // Puerto por defecto de MySQL
    $user = "root"; 
    $pass = "admin-123";
    $bd = "bd_escuela";

    try {
        // Crear una conexión a la base de datos con PDO
        $conexion = new PDO("mysql:host=$host;port=$port;dbname=$bd", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*
        // Crear una conexión a la base de datos con mysqli
        $conexion = new mysqli($host, $user, $pass, $bd, $port);
        */
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>
