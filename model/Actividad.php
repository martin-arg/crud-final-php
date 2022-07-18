<?php

class Actividad {
    private $actividadID;
    private $actividad;
    private $responsableID;
    private $dias;
    private $horario;
    private $asistentesMax;

    /**
     * @return mixed
     */
    public function getActividadID()
    {
        return $this->actividadID;
    }

    /**
     * @return mixed
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * @return mixed
     */
    public function getResponsableID()
    {
        return $this->responsableID;
    }

    /**
     * @return mixed
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @return mixed
     */
    public function getAsistentesMax()
    {
        return $this->asistentesMax;
    }



}