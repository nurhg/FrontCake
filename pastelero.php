<!DOCTYPE html>
<html>

<head>
    <title>Pastelero</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stilos.css">
    <link rel="stylesheet" href="form.css">
    <style>
        body {
            font-family: "Verdana", Georgia, Serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 5px;
        }
    </style>
</head>

<body>

    <!-- Barra -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="#home" class="w3-bar-item w3-button">FrontCake</a>
            <!-- Menu-->
            <a class="w3-bar-item">Hola: <?php echo $_POST["usuario"]; ?></a>
        </div>
    </div>

    <!-- Contenido de pagina -->

    <!-- Ingredientes restantes -->
    <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
            <h1 class="w3-center">Ingredientes restantes</h1><br>
            <div class="w3-responsive">
                <table class="w3-table-all">
                    <tr>
                        <th>Sabores</th>
                        <th>Unidades</th>
                        <th>Adornos</th>
                        <th>Unidades</th>
                    </tr>
                    <tr>
                        <td>Chocolate</td>
                        <td>80 kgs.</td>
                        <td>Chispas</td>
                        <td>50 kgs.</td>
                    </tr>
                    <tr>
                        <td>Vainilla</td>
                        <td>90 lts.</td>
                        <td>Nuez</td>
                        <td>94 kgs.</td>
                    </tr>
                    <tr>
                        <td>Fresa</td>
                        <td>70 kgs.</td>
                        <td>Merengue</td>
                        <td>67 lts.</td>
                    </tr>
                </table><br>
                <h1 class="w3-center">Pedido del Cliente</h1><br>
                <h3>El cliente quiere lo siguiente:</h3>
                <ul class="w3-ul w3-border">
                    <li>
                        <h4>Sabor del pastel</h4>
                    </li>
                    <li>Chocolate</li>
                    <li>Fresa</li>
                    <li>
                        <h4>Adornos del Pastel</h4>
                    </li>
                    <li>Chispas</li>
                    <li>Nuez</li>
                    <li>
                        <h4>Datos del Cliente</h4>
                    </li>
                    <li>Nombre</li>
                    <li>Direccion</li>
                    <li>Telefono</li>
                    <li>Fecha de entrega</li>
                    <li>Para cuantas personas es el pastel</li>
                    <li>Comentarios del cliente</li>
                    <li>Email</li>
                </ul>
            </div>
        </div>

        <div class="w3-col l6 w3-padding-large">
            <img src="imagenes/pastelero.webp" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
    </div>

    <hr>

    <!-- Contacto -->
    <div class="w3-container w3-padding-64" id="contacto">
        <h1>Contacto</h1><br>
        <p>Ofrecemos servicios completos para tu evento, puedes encontrarnos en:</p>
        <p class="w3-text-blue-grey w3-large"><b>FrontCake, Calle fulanita #99, Ciudad del Nabo.</b></p>
        <p>Tambien puede llamarnos al: 00553123-2323 o a nuestro correo: frontcake@frontcake.com</p>
    </div>
    </div>

    <!-- pie de pagina -->
    <footer class="w3-center w3-light-grey w3-padding-32">
        <p><a href="#home" title="Alan Molina" target="" class="w3-hover-text-green">Alan Molina</a></p>
    </footer>

</body>

</html>