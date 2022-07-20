<?php

class UsuarioDAO
{
    public function validarUsuarioYPass($usuario, $clave) {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");
        $conexionDB = new ConexionDB("localhost", "root", "", "clubsocial");
        $conexionDB->conectar();

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
        $result = $conexionDB->ejecutar($sql);

        $existeUsuYPass = $conexionDB->cantFilas() > 0;
        if ($existeUsuYPass) {
            $usu = $result->fetch_assoc();
//            $usuObj = new Usuario($usu["id"], $usu["usuario"], $usu["clave"], $usu["rol"], $usu["nombre"], $usu["apellido)"]);

            $_SESSION['nombre'] = $usu['nombre'];



            return true;
        } else {
            return false;
        }
    }

    public function listarUsuarios() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");

        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();

        $sql="SELECT * FROM usuarios";
        $result = $conexionDB->ejecutar($sql);

        while ($usu = $result->fetch_assoc()) {
            $usuObj = new Usuario($usu["usuarioID"], $usu["usuario"], $usu["clave"],$usu["rol"],$usu["nombre"],$usu["apellido"]);

            $listaUsu[] = $usuObj;
        }

        return $listaUsu;
    }






}