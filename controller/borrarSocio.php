<?php
require_once("../dao/SocioDAO.php");
$id = $_GET["id"];
$socioDao = new SocioDAO();
$seBorro = $socioDao->borrarSocio($id);

if ($seBorro) {
    header("Location: ../view/listarSocios.php");
    exit;
}else {
    header("Location: ../view/error.php");
    exit;
}

?>