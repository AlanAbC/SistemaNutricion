<?php

class AlimentosAsignados{

    private $expediente;
    private $idAlimento;
    private $cantidad;
    private $paciente;
    private $alimentosPredeterminados;

    public function __construct($expediente, $idAlimento, $cantidad, $paciente, $alimentosPredeterminados)
    {
        $this->expediente = $expediente;
        $this->idAlimento = $idAlimento;
        $this->cantidad = $cantidad;
        $this->paciente = $paciente;
        $this->alimentosPredeterminados = $alimentosPredeterminados;
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
    public function getIdAlimento()
    {
        return $this->idAlimento;
    }

    /**
     * @param mixed $idAlimento
     */
    public function setIdAlimento($idAlimento)
    {
        $this->idAlimento = $idAlimento;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * @param mixed $paciente
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }

    /**
     * @return mixed
     */
    public function getAlimentosPredeterminados()
    {
        return $this->alimentosPredeterminados;
    }

    /**
     * @param mixed $alimentosPredeterminados
     */
    public function setAlimentosPredeterminados($alimentosPredeterminados)
    {
        $this->alimentosPredeterminados = $alimentosPredeterminados;
    }

}