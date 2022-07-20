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

    public function modificarSocio($socio) {
        require_once("../dataBase/ConexionDB.php");
        require_once ("../model/Socio.php");
        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();


        $sql = "UPDATE socios SET name='{$socio->getName()}', dni='{$socio->getDni()}', email='{$socio->getEmail()}' WHERE socioID='{$socio->getSocioID()}'";


        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function crearSocio(Socio $socio){
        require_once ("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();

        $sql = "INSERT INTO socios (name, email, dni) VALUES ('{$socio->getName()}','{$socio->getEmail()}', '{$socio->getDni()}');";
        $conexionDB->ejecutar(($sql));
        return $conexionDB->cantFilas() >0;

    }

    public function borrarSocio($id){
        require_once ("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();

        $sql1 = "DELETE FROM socios WHERE `socios`.`socioID` = $id";
        $sql2 = "DELETE FROM clases WHERE `clases`.`socioID` = $id";
        $conexionDB->ejecutar(($sql2));
        $conexionDB->ejecutar(($sql1));
        return $conexionDB->cantFilas() >0;
    }


}