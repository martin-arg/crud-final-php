<?php
//require ("../model/Socio.php");
//require ("../dataBase/ConexionDB.php");
class SocioDAO
{
    public function listarSocios() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Socio.php");

        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();

        $sql="SELECT * FROM socios";
        $result = $conexionDB->ejecutar($sql);

        while ($soc = $result->fetch_assoc()) {
            $socObj = new Socio($soc["socioID"], $soc["name"], $soc["dni"],$soc["email"]);

            $listaSoc[] = $socObj;
        }

        return $listaSoc;
    }

    public function getSocioxId($id) {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Socio.php");
        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();
        $sql ="SELECT * FROM `socios` WHERE socioID = $id";
        $result = $conexionDB->ejecutar($sql);
        while ($soc = $result->fetch_assoc()) {
            $socObj = new Socio($soc["socioID"], $soc["name"], $soc["dni"],$soc["email"]);

        }

        return $socObj;



//        $soc = $result->fetch_assoc;
//
//        $socObj = new Socio($soc["socioID"], $soc["name"], $soc["dni"],$soc["email"]);
//
//
//
//        return $socObj;
    }
}