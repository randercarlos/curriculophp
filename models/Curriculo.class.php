<?php

/**
 * Description of Curriculo2
 *
 * @author RANDER
 */
class Curriculo {
    
    private $id;
    private $nome;
    private $dataNascimento;
    private $email;
    private $endereco;
    private $informacoes;
    private $objetivo;
    private $foto;
    
    private $telefones = array();
    private $experiencias = array();
    private $formacoes = array();
    private $qualificacoes = array();
    private $idiomas = array();

   
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getInformacoes() {
        return $this->informacoes;
    }

    public function getObjetivo() {
        return $this->objetivo;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    public function setInformacoes($informacoes) {
        $this->informacoes = $informacoes;
    }

    public function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function adicionaTelefone($id, $descricao) {
        $this->telefones[] = new Telefone($id, $descricao);
    }
    
    public function adicionaIdioma($id, $nome, $descricao, $nivel) {
        $this->idiomas[] = new Idioma($id, $nome, $descricao, $nivel);
    }
    
     public function adicionaQualificacao($id, $nome) {
        $this->qualificacoes[] = new Qualificacao($id, $nome);
    }
    
     public function adicionaExperiencia($id, $cargo, $empresa, $descricao, 
             $dataInicio, $dataTermino) {
        $this->experiencias[] = new Experiencia($id, $cargo, $empresa, $descricao, 
                $dataInicio, $dataTermino);
    }
    
     public function adicionaFormacao($id, $nome, $curso, $instituicao, 
             $dataTermino, $concluido) {
        $this->formacoes[] = new Formacao($id, $nome, $curso, $instituicao, 
                $dataTermino, $concluido);
    }
    
    public function getTelefones() {
        return $this->telefones;
    }

    public function getExperiencias() {
        return $this->experiencias;
    }

    public function getFormacoes() {
        return $this->formacoes;
    }

    public function getQualificacoes() {
        return $this->qualificacoes;
    }

    public function getIdiomas() {
        return $this->idiomas;
    }
}
