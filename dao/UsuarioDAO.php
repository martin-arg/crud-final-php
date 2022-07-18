<?php

class UsuarioDAO {
    public function validarUsuarioYPass($usuario, $clave) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","root","","clubsocial");
        $conexionDB->conectar(); //conecta php con la base de datos MySql

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

}