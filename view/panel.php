<?php
require "./partials/head.php"

?>
<title>Panel</title>
<?php
include("./partials/header.php")
?>
<main>

<?php
$nombre = $_SESSION['nombre'];
   echo  "<h1 class='title'>Bienvenido, $nombre!</h1>"
?>
<?php
require "./partials/panel.php"

?>

</main>

<?php
require("./partials/footer.php")
?>