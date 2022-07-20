</head>

<body>
<?php
session_start()
?>
<header>
    <img class="logo" src="img/icono.svg"  alt="error">
    <nav>

        <ul class="nav_links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./actividades.php">Actividades</a></li>
            <li><a href="./instalaciones.php">Instalaciones</a></li>
            <li><a href="./contacto.php">Contactenos</a></li>
            <?php if (empty($_SESSION)) {
            echo '<li><a href="./login.php">Login</a></li>';
            } else  {
                $nombre = $_SESSION['nombre'];
                echo "<li><span>Bienvenido $nombre</span></li>";
                echo "<li><a href='./panel.php'>Panel</a></li>";
                echo '<li><a href="../controller/logout.php">Logout</a></li>';
            }
            ?>

        </ul>
    </nav>
</header>