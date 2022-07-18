<?php
session_start();
$usu=$_POST["usuario"];
$pass=$_POST["password"];

require_once("../dao/UsuarioDAO.php");

$usuarioDAO = new UsuarioDAO();
$loginValido = $usuarioDAO->validarUsuarioYPass($usu, $pass);

if ($loginValido) {
    $_SESSION['User'] = $usu;

    header("Location: ../view/index.php");
    exit;
} else {
    header("Location: ../view/loginError.html");
    exit;
}






?>