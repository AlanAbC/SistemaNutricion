<?php

class AlimentosPredeterminados{

    private $id;
    private $nombre;
    private $descripcion;
    private $carbohidratos;
    private $proteinas;
    private $lipidos;

    /**
     * AlimentosPredeterminados constructor.
     * @param $id
     * @param $nombre
     * @param $descripcion
     * @param $carbohidratos
     * @param $proteinas
     * @param $lipidos
     */
    public function __construct($id, $nombre, $descripcion, $carbohidratos, $proteinas, $lipidos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->carbohidratos = $carbohidratos;
        $this->proteinas = $proteinas;
        $this->lipidos = $lipidos;
    }

    public function _construct(){

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getCarbohidratos()
    {
        return $this->carbohidratos;
    }

    /**
     * @param mixed $carbohidratos
     */
    public function setCarbohidratos($carbohidratos)
    {
        $this->carbohidratos = $carbohidratos;
    }

    /**
     * @return mixed
     */
    public function getProteinas()
    {
        return $this->proteinas;
    }

    /**
     * @param mixed $proteinas
     */
    public function setProteinas($proteinas)
    {
        $this->proteinas = $proteinas;
    }

    /**
     * @return mixed
     */
    public function getLipidos()
    {
        return $this->lipidos;
    }

    /**
     * @param mixed $lipidos
     */
    public function setLipidos($lipidos)
    {
        $this->lipidos = $lipidos;
    }

}