<?php

class Paciente
{

    private $expediente;
    private $nombre;
    private $apellidop;
    private $apellidom;
    private $edad;
    private $sexo;
    private $correo;
    private $telefono;
    private $fechaIngreso;

    /**
     * Paciente constructor.
     * @param $expediente
     * @param $nombre
     * @param $apellidop
     * @param $apellidom
     * @param $edad
     * @param $sexo
     * @param $correo
     * @param $telefono
     * @param $fechaIngreso
     */
    public function __construct($expediente, $nombre, $apellidop, $apellidom, $edad, $sexo, $correo, $telefono, $fechaIngreso)
    {
        $this->expediente = $expediente;
        $this->nombre = $nombre;
        $this->apellidop = $apellidop;
        $this->apellidom = $apellidom;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->fechaIngreso = $fechaIngreso;
    }

    public function _construct(){

    }

    /**
     * @return mixed
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * @param mixed $expediente
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * @param mixed $apellidop
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;
    }

    /**
     * @return mixed
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * @param mixed $apellidom
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * @param mixed $fechaIngreso
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    }

}