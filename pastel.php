<!DOCTYPE html>
<html>

<head>
    <title>Pedido</title>
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
            <!-- Menu derecha -->
            <div class="w3-right w3-hide-small">
                <a href="#contacto" class="w3-bar-item w3-button">Contacto</a>
            </div>
        </div>
    </div>

    <!-- Contenido de pagina -->
    <div class="w3-content" style="max-width:1100px">

        <!-- Nosotros -->
        <div class="w3-row w3-padding-64" id="nosotros">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="imagenes/pastel.webp" class="w3-round w3-image w3-opacity-min" alt="Pastel de pisos" width="600" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">Hola <?php echo $_POST["name"]; ?></h1><br>
                <h2 class="w3-center">Tu pastel tendra lo siguiente</h2><br>
                <h3 class="w3-center">Sabores:</h3><br>
                <p class="w3-large"><?php echo $_POST["chocolate"]; ?></p>
                <p class="w3-large"><?php echo $_POST["vainilla"]; ?></p>
                <p class="w3-large"><?php echo $_POST["fresa"]; ?></p>
                <h3 class="w3-center">Adornos:</h3><br>
                <p class="w3-large"><?php echo $_POST["nuez"]; ?></p>
                <p class="w3-large"><?php echo $_POST["chispas"]; ?></p>
                <p class="w3-large"><?php echo $_POST["merengue"]; ?></p>
                <h3 class="w3-center">Informacion Adicional:</h3><br>
                <p class="w3-large">Sera entregado en: <?php echo $_POST["direccion"]; ?></p>
                <p class="w3-large">Lo quieres para: <?php echo $_POST["personas"]; ?> Personas</p>
                <p class="w3-large">La entrega se realizara el: <?php echo $_POST["fecha"]; ?></p>
                <p class="w3-large">El numero para contactarte es: <?php echo $_POST["telefono"]; ?></p>
                <p class="w3-large">Tu email de contacto es: <?php echo $_POST["correo"]; ?></p>
                <p class="w3-large">Comentarios: <?php echo $_POST["mensaje"]; ?></p>
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