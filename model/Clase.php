<?php

class Clase {
    private $actividadID;
    private $socioID;

    /**
     * @param $actividadID
     * @param $socioID
     */
    public function __construct($actividadID, $socioID)
    {
        $this->actividadID = $actividadID;
        $this->socioID = $socioID;
    }

    /**
     * @return mixed
     */
    public function getActividadID()
    {
        return $this->actividadID;
    }

    /**
     * @param mixed $actividadID
     */
    public function setActividadID($actividadID)
    {
        $this->actividadID = $actividadID;
    }

    /**
     * @return mixed
     */
    public function getSocioID()
    {
        return $this->socioID;
    }

    /**
     * @param mixed $socioID
     */
    public function setSocioID($socioID)
    {
        $this->socioID = $socioID;
    }


}