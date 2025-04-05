
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $descripcion = $_POST['descripcion'];

        echo "<h2>Gracias por tu solicitud de cotización, $nombre.</h2>";
        echo "<p>Hemos recibido tu solicitud de cotización y se te estará enviando a la brevedad posible al correo $correo</p>";
    }
?>
