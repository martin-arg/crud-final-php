<!DOCTYPE html>
<html lang="es">
<?php
require "partials/head.php"

?>
    <title>contactanos</title>
</head>

<body>
<?php
require "partials/header.php"
?>
    <main>
        <h1>contactanos</h1>
        <section class="formulario">
            <form action="#" method="post" onsubmit="return validar();">
                <div class="datos">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="Nombre">
                </div>
                <div class="datos">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="Apellido">
                </div>
                <div class="datos">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="datos">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono">
                </div>
                <div class="datos">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escriba su Mensaje"
                        style="height:200px"></textarea>
                </div>
                <div class="boton">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </section>

    </main>
    <footer>
        <br>
        <nav>


        </nav>
        <p>Derechos reservados 2022</p>
        <br>

    </footer>

    <script src="js/main.js"></script>
</body>

</html>