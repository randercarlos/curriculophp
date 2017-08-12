<?php

/**
 * Description of Idioma
 *
 * @author RANDER
 */
class Idioma {
    
    private $id;
    private $nome;
    private $descricao;
    private $nivel;
    
    public function __construct($id, $nome, $descricao, $nivel) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->nivel = $nivel;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }


}
