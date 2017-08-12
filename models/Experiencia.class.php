<?php

/**
 * Description of Experiencia
 *
 * @author RANDER
 */
class Experiencia {
    
    private $id;
    private $cargo;
    private $empresa;
    private $descricao;
    private $dataInicio;
    private $dataTermino;
    
    public function __construct($id, $cargo, $empresa, $descricao, $dataInicio, $dataTermino) {
        $this->id = $id;
        $this->cargo = $cargo;
        $this->empresa = $empresa;
        $this->descricao = $descricao;
        $this->dataInicio = $dataInicio;
        $this->dataTermino = $dataTermino;
    }

    public function getId() {
        return $this->id;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function getDataTermino() {
        return $this->dataTermino;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function setDataTermino($dataTermino) {
        $this->dataTermino = $dataTermino;
    }


}
