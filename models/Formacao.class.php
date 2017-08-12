<?php

/**
 * Description of Formacao
 *
 * @author RANDER
 */
class Formacao {
    
    private $id;
    private $nome;
    private $curso;
    private $instituicao;
    private $dataTermino;
    private $concluido;
    
    public function __construct($id, $nome, $curso, $instituicao, $dataTermino, 
            $concluido) {
        $this->id = $id;
        $this->nome = $nome;
        $this->curso = $curso;
        $this->instituicao = $instituicao;
        $this->dataTermino = $dataTermino;
        $this->concluido = $concluido;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function getDataTermino() {
        return $this->dataTermino;
    }

    public function getConcluido() {
        return $this->concluido;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    public function setDataTermino($dataTermino) {
        $this->dataTermino = $dataTermino;
    }

    public function setConcluido($concluido) {
        $this->concluido = $concluido;
    }


}
