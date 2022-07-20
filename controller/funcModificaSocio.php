<?php

$id = $_POST['idsocio'];
$name = $_POST['nombre'];
$dni = $_POST['dni'];
$mail = $_POST['email'];

require_once ("../model/Socio.php");
require_once ("../dao/SocioDAO.php");
 $socio = new Socio($id, $name, $dni, $mail);
 $socioDao = new SocioDAO();
 $seGuardo = $socioDao->modificarSocio($socio);

 if ($seGuardo) {
     header("Location: ../view/listarSocios.php");
     exit;
 }else {
     header("Location: ../view/error.php");
     exit;
 }

 ?>