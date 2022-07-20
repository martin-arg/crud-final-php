<?php

class Actividad {
    private $actividadID;
    private $actividad;
    private $responsableID;
    private $dias;
    private $horario;
    private $asistentesMax;

    /**
     * @param $actividadID
     * @param $actividad
     * @param $responsableID
     * @param $dias
     * @param $horario
     * @param $asistentesMax
     */
    public function __construct($actividadID, $actividad, $responsableID, $dias, $horario, $asistentesMax)
    {
        $this->actividadID = $actividadID;
        $this->actividad = $actividad;
        $this->responsableID = $responsableID;
        $this->dias = $dias;
        $this->horario = $horario;
        $this->asistentesMax = $asistentesMax;
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
    public function setActividadID($actividadID): void
    {
        $this->actividadID = $actividadID;
    }

    /**
     * @return mixed
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * @param mixed $actividad
     */
    public function setActividad($actividad): void
    {
        $this->actividad = $actividad;
    }

    /**
     * @return mixed
     */
    public function getResponsableID()
    {
        return $this->responsableID;
    }

    /**
     * @param mixed $responsableID
     */
    public function setResponsableID($responsableID): void
    {
        $this->responsableID = $responsableID;
    }

    /**
     * @return mixed
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @param mixed $dias
     */
    public function setDias($dias): void
    {
        $this->dias = $dias;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario): void
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getAsistentesMax()
    {
        return $this->asistentesMax;
    }

    /**
     * @param mixed $asistentesMax
     */
    public function setAsistentesMax($asistentesMax): void
    {
        $this->asistentesMax = $asistentesMax;
    }




}