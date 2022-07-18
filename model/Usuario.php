<?php

class Usuario
{
    private $id;
    private $usuario;
    private $clave;
    private $rol;
    private $nombre;
    private $apellido;

    /**
     * @param $id
     * @param $usuario
     * @param $clave
     * @param $rol
     * @param $nombre
     * @param $apellido
     */
    public function __construct($id, $usuario, $clave, $rol, $nombre, $apellido)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->rol = $rol;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }


}