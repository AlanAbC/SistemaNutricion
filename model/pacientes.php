<?php 
	class Paciente{

	    private $expediente;
	    private $nombre;
	    private $apellidop;
	    private $apellidom;
	    private $edad;
	    private $sexo;
	    private $correo;
	    private $telefono;
	    private $fechaIngreso;

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

	    public function getExpediente()
	    {
	        return $this->expediente;
	    }

	    public function setExpediente($expediente)
	    {
	        $this->expediente = $expediente;
	    }

	    public function getNombre()
	    {
	        return $this->nombre;
	    }

	    public function setNombre($nombre)
	    {
	        $this->nombre = $nombre;
	    }

	    public function getApellidop()
	    {
	        return $this->apellidop;
	    }

	    public function setApellidop($apellidop)
	    {
	        $this->apellidop = $apellidop;
	    }

	    public function getApellidom()
	    {
	        return $this->apellidom;
	    }

	    public function setApellidom($apellidom)
	    {
	        $this->apellidom = $apellidom;
	    }

	    public function getEdad()
	    {
	        return $this->edad;
	    }

	    public function setEdad($edad)
	    {
	        $this->edad = $edad;
	    }

	    public function getSexo()
	    {
	        return $this->sexo;
	    }

	    public function setSexo($sexo)
	    {
	        $this->sexo = $sexo;
	    }

	    public function getCorreo()
	    {
	        return $this->correo;
	    }

	    public function setCorreo($correo)
	    {
	        $this->correo = $correo;
	    }

	    public function getTelefono()
	    {
	        return $this->telefono;
	    }

	    public function setTelefono($telefono)
	    {
	        $this->telefono = $telefono;
	    }

	    public function getFechaIngreso()
	    {
	        return $this->fechaIngreso;
	    }

	    public function setFechaIngreso($fechaIngreso)
	    {
	        $this->fechaIngreso = $fechaIngreso;
	    }

	}
?>