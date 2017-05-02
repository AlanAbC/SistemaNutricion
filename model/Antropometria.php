<?php
class Antropometria{

    private $expediente;
    private $peso;
    private $altura;
    private $imc;
    private $cintura;
    private $cadera;
    private $icc;
    private $grasa;
    private $musculo;
    private $paciente;

    public function __construct($expediente, $peso, $altura, $imc, $cintura, $cadera, $icc, $grasa, $musculo, $paciente)
    {
        $this->expediente = $expediente;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $imc;
        $this->cintura = $cintura;
        $this->cadera = $cadera;
        $this->icc = $icc;
        $this->grasa = $grasa;
        $this->musculo = $musculo;
        $this->paciente = $paciente;
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

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getImc()
    {
        return $this->imc;
    }

    public function setImc($imc)
    {
        $this->imc = $imc;
    }

    public function getCintura()
    {
        return $this->cintura;
    }

    public function setCintura($cintura)
    {
        $this->cintura = $cintura;
    }

    public function getCadera()
    {
        return $this->cadera;
    }

    public function setCadera($cadera)
    {
        $this->cadera = $cadera;
    }

    public function getIcc()
    {
        return $this->icc;
    }

    public function setIcc($icc)
    {
        $this->icc = $icc;
    }

    public function getGrasa()
    {
        return $this->grasa;
    }

    public function setGrasa($grasa)
    {
        $this->grasa = $grasa;
    }

    public function getMusculo()
    {
        return $this->musculo;
    }

    public function setMusculo($musculo)
    {
        $this->musculo = $musculo;
    }

    public function getPaciente()
    {
        return $this->paciente;
    }

    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }

}