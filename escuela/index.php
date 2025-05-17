<?php
    require "conexion.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Aquí puedes manejar la lógica para guardar el nuevo estudiante
        $nombre = $_POST['nombre'];
        // Realiza la inserción en la base de datos
        $stmt = $conexion->prepare("INSERT INTO ESTUDIANTE (nombre) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();

        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Escuela</a>
            <form class="d-flex" role="search">
            <button class="btn btn-outline-success" type="submit">NUEVO ESTUDIANTE</button>
            </form>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="nuevoEstudianteModal" tabindex="-1" aria-labelledby="nuevoEstudianteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nuevoEstudianteLabel">Nuevo Estudiante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar el formulario para el nuevo estudiante -->
                    <form method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Cambia el botón para que abra el modal
        document.addEventListener('DOMContentLoaded', function() {
            const btnNuevo = document.querySelector('button[type="submit"].btn-outline-success');
            btnNuevo.type = 'button';
            btnNuevo.setAttribute('data-bs-toggle', 'modal');
            btnNuevo.setAttribute('data-bs-target', '#nuevoEstudianteModal');
        });
    </script>
</body>
</html>