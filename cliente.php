<!DOCTYPE html>
<html>

<head>
    <title>Cliente</title>
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
            <a href="#nosotros" class="w3-bar-item w3-button">Nosotros</a>
            <a href="#menu" class="w3-bar-item w3-button">Arma tu pastel...</a>
            <a href="#contacto" class="w3-bar-item w3-button">Contacto</a>
            <a class="w3-bar-item">Hola: <?php echo $_POST["usuario"]; ?></a>
        </div>
    </div>

    <!-- Cabecera -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
        <img class="w3-image" img src="imagenes/pastel.jpg" alt="Pasteles" width="1600" height="800">
        <div class="w3-display-bottomleft w3-padding-large w3-opacity">
            <h1 class="w3-xxlarge w3-light-grey">FrontCake</h1>
        </div>
    </header>

    <!-- Contenido de pagina -->
    <div class="w3-content" style="max-width:1100px">

        <!-- Nosotros -->
        <div class="w3-row w3-padding-64" id="nosotros">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="imagenes/pastel.webp" class="w3-round w3-image w3-opacity-min" alt="Pastel de pisos" width="600" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">Acerca de Nosotros</h1><br>
                <h5 class="w3-center">Desde 1900</h5>
                <p class="w3-large">FrontCake fue fundada con el proposito de satisfacer las necesidades de nuestros clientes mas exigentes con los<span class="w3-tag w3-light-grey">mejores</span> ingredientes.</p>
                <p class="w3-large w3-text-grey w3-hide-medium">Ademas podemos realizar la personalizacion de tu evento mas deseado, para que tus invitados se sientan como en casa.</p>
            </div>
        </div>

        <hr>

        <!-- Menu -->
        <div class="w3-row w3-padding-64" id="menu">
            <div class="w3-col l6 w3-padding-large">
                <h1 class="w3-center">Arma tu Pastel...</h1><br>
                <form action="/pastel.php" target="_blank" method="post">
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Cual es tu nombre?" required name="name"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Proporciona tu direccion de entrega" required name="direccion"></p>
                    <p><input class="w3-input w3-padding-16" type="number" placeholder="Danos un numero de contacto" required name="telefono"></p>
                    <p><input class="w3-input w3-padding-16" type="email" placeholder="Correo Electronico" required name="correo"></p>
                    <p><input class="w3-input w3-padding-16" type="number" placeholder="Para cuantas personas es el pastel?" required name="personas"></p><br>
                    <p>Cuando quieres tu pastel?</p>
                    <p><input class="w3-input w3-padding-16" type="date" placeholder="Fecha de tu pastel" required name="fecha"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Alguna indicacion adicional?" required name="mensaje"></p><br>
                    <h1>Sabores</h1><br>
                    <label class="container" for="sabor1">Chocolate
                        <input type="checkbox" id="sabor1" name="chocolate" value="Chocolate">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container" for="sabor2">Vainilla
                        <input type="checkbox" id="sabor2" name="vainilla" value="Vainilla">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container" for="sabor3">Fresa
                        <input type="checkbox" id="sabor3" name="fresa" value="Fresa">
                        <span class="checkmark"></span><br>
                    </label>
                    <h1>Adornos</h1><br>
                    <label class="container" for="adorno1">Chispas
                        <input type="checkbox" id="adorno1" name="chispas" value="Chispas">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container" for="adorno2">Nuez
                        <input type="checkbox" id="adorno2" name="nuez" value="Nuez">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container" for="adorno3">Merengue
                        <input type="checkbox" id="adorno3" name="merengue" value="Merengue">
                        <span class="checkmark"></span>
                    </label>
                    <p><button class="w3-button w3-blue w3-section" type="submit">Enviar</button></p>
                </form>
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