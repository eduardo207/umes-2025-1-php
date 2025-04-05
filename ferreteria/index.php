<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ferreteria S.A.</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="header">
            <div class="identidad">
                <img src="images/logo-ferreteria.gif" alt="Logo de Ferreteria S.A." title="Logo" width="66px">        
                <h1>FERRETERIA S.A.</h1>
            </div>
            <div class="menu">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCotizacion">
                    Solicitar cotización
                </button>
                <a class="menu-item" href="#">Inicio</a>
                <a class="menu-item" href="productos/productos.html">Productos</a>
                <a class="menu-item" href="servicios/servicios.html">Servicios</a>
            </div>
        </div>
        <br />
        <div id="content">
            <!-- Cuadros de dialogo -->
            <div class="modal fade" id="modalCotizacion" tabindex="-1" aria-labelledby="modalCotizacionLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCotizacionLabel">Nueva cotización</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="cotizacion.php" method="POST">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono:</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono">
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción:</label>
                                    <textarea rows="10" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripción de lo que necesita..." ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Solicitar cotización</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h2>NUESTRO NEGOCIO:</h2>
            <p>
                Ferreteria S.A. es una empresa dedicada a la venta de productos de ferreteria, 
                contamos con una amplia variedad de productos y servicios para satisfacer las necesidades de nuestros clientes.
            </p>
            <br />
            <h2>CONOCENOS MAS</h2>
            
            <div class="contenedor">
                <div class="area-a"> <img src="./images/f1.webp" alt=""> </div>
                <div class="area-b"> <img src="./images/f5.webp" alt=""> </div>
                <div class="area-c"> <img src="./images/f6.webp" alt=""> </div>
                <div class="area-d"> <img src="./images/f2.webp" alt="">  </div>
                <div class="area-e"> <img src="./images/f4.webp" alt="">  </div>
                <div class="area-f"> <img src="./images/f3.jpg" alt="">  </div>
            </div>
            <br />
            <h2>NUESTROS PRODUCTOS OFERTADOS:</h2>
            <div class="product-container">
                <?php

                    $productosOfertados = [
                        ["fotografia" => "oferta-1.jpg", "titulo" => "CINTA METRICA", "descripcion" => "Cinta metrica de 10 metros", "precio" => "Q. 150.00"],
                        ["fotografia" => "oferta-2.webp", "titulo" => "DISCOS", "descripcion" => "Discos de pulidora", "precio" => "Q. 200.00"],
                        ["fotografia" => "oferta-3.jpg", "titulo" => "DESTORNILLADOR ELECTRICO", "descripcion" => "Destornillador electrico de 12v", "precio" => "Q. 700.00"],
                        ["fotografia" => "oferta-4.jpg", "titulo" => "LLAVE DE CANGREJO", "descripcion" => "Llave de cangrejo de 12 pulgadas", "precio" => "Q. 70.00"]
                    ];

                    foreach($productosOfertados as $producto){
                        echo '<div class="product-item">';
                        echo '    <img src="images/' . $producto["fotografia"] . '" alt="oferta 1">';
                        echo '    <div class="product-detail">';
                        echo '        <h5>' . $producto["titulo"] . '</h5>';
                        echo '        <p>' . $producto["descripcion"] . '</p>';
                        echo '        <h3>' . $producto["precio"] . '</h3>';
                        echo '    </div>';
                        echo '</div>';
                    }
                ?>
            </div>
            <br />
            <br />
        </div>
        <br />
        <div id="footer">
            <table width="100%">
                <tr>
                    <td>Ferreteria S.A. <sup>[R]</sup></td>
                    <td align="right">
                        10Av 10-45 Zona 10, Guatemala, Guatemala
                        <br />
                        Telefonos: 2432-7345 o 2434-5678
                    </td>
                </tr>
            </table>
        </div>
    </body>
    </html>