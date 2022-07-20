<?php

class Socio {
    private $socioID;
    private $name;
    private $dni;
    private $email;

    /**
     * @param $socioID
     * @param $name
     * @param $dni
     * @param $email
     */
    public function __construct($socioID, $name, $dni, $email)
    {
        $this->socioID = $socioID;
        $this->name = $name;
        $this->dni = $dni;
        $this->email = $email;
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
    public function setSocioID($socioID): void
    {
        $this->socioID = $socioID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni): void
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


}