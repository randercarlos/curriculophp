<?php

class Telefone {
    
    private $id;
    private $descricao;
    
    public function __construct($id, $descricao) {
        $this->id = $id;
        $this->descricao = $descricao;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}

