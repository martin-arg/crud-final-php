<?php

class ActividadDAO
{
    public function listarActividades() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Actividad.php");

        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();

        $sql="SELECT * , usuarios.nombre as Nombre FROM `actividades` INNER JOIN usuarios ON actividades.actividadID=usuarios.usuarioID";
        $result = $conexionDB->ejecutar($sql);

        while ($act = $result->fetch_assoc()) {
            $actObj = new Actividad($act["actividadID"], $act["actividad"], $act["Nombre"],$act["dias"],$act["horario"],$act["asistentesMax"]);

            $listaAct[] = $actObj;
        }

        return $listaAct;
    }

}