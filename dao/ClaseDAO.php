<?php

class ClaseDAO
{
    public function listarClases() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Clase.php");

        $conexionDB = new ConexionDB("localhost","root", "", "clubsocial");
        $conexionDB->conectar();

        $sql="SELECT actividades.actividad AS Actividad , socios.name as Socio FROM `clases` JOIN socios ON clases.socioID=socios.socioID JOIN actividades ON clases.actividadID=actividades.actividadID";
        $result = $conexionDB->ejecutar($sql);

        while ($clase = $result->fetch_assoc()) {
            $claseObj = new Clase($clase["Actividad"], $clase["Socio"]);

            $listaClase[] = $claseObj;
        }

        return $listaClase;
    }



}