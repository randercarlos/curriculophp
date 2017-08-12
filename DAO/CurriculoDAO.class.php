<?php

/**
 * Description of CurriculoDAO
 *
 * @author RANDER
 */
class CurriculoDAO {
    
    private $pdo;
    private $curriculo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function buscarPorId($id) {
        
        $sql = 'SELECT * FROM tb_curriculo WHERE id_curriculo = ' . $id;
        $result = $this->pdo->query($sql);
        
        
        if (!empty($result)) {
            $linha = $result->fetch(PDO::FETCH_ASSOC);
            
            $this->curriculo = new Curriculo();
            $this->curriculo->setId($linha['id_curriculo']);
            $this->curriculo->setNome($linha['nm_curriculo']);
            $this->curriculo->setObjetivo($linha['de_objetivo']);
            $this->curriculo->setEmail($linha['de_email']);
            $this->curriculo->setEndereco($linha['de_endereco']);
            $this->curriculo->setDataNascimento($linha['dt_nascimento']);
            $this->curriculo->setInformacoes($linha['de_informacoes']);
            
            $this->buscarTelefonesDoCurriculo($id);
            $this->buscarIdiomasDoCurriculo($id);
            $this->buscarQualificacoesDoCurriculo($id);
            $this->buscarExperienciasDoCurriculo($id);
            $this->buscarFormacoesDoCurriculo($id);
        }
        
        return $this->curriculo;
    }
    
    private function buscarTelefonesDoCurriculo($id_curriculo) {
        
        $sql = 'SELECT * FROM tb_telefone WHERE fk_id_curriculo = ' . $id_curriculo;
        $result = $this->pdo->query($sql);
        
        $telefones = array();
        if (!empty($result)) {
            while($telefone = $result->fetch(PDO::FETCH_ASSOC)) {
               // $telefones[] = $telefone;
               $this->curriculo->adicionaTelefone($telefone['id_telefone'], 
                        $telefone['de_telefone']);
            }
        }
        
        return $telefones;
    }
    
    private function buscarExperienciasDoCurriculo($id_curriculo) {
        
        $sql = 'SELECT * FROM tb_experiencia WHERE fk_id_curriculo = ' . $id_curriculo;
        $result = $this->pdo->query($sql);
        
        if (!empty($result)) {
            while($experiencia = $result->fetch(PDO::FETCH_ASSOC)) {
                $this->curriculo->adicionaExperiencia(
                        $experiencia['id_experiencia'],
                        $experiencia['nm_cargo'],
                        $experiencia['nm_empresa'],
                        $experiencia['de_experiencia'],
                        $experiencia['dt_inicio'],
                        $experiencia['dt_termino']);
            }
        }
    }
    
    private function buscarFormacoesDoCurriculo($id_curriculo) {
        
        $sql = 'SELECT * FROM tb_formacao WHERE fk_id_curriculo = ' . $id_curriculo;
        $result = $this->pdo->query($sql);
        
        if (!empty($result)) {
            while($formacao = $result->fetch(PDO::FETCH_ASSOC)) {
                $this->curriculo->adicionaFormacao($formacao['id_formacao'], 
                        $formacao['nm_formacao'], 
                        $formacao['nm_curso'], 
                        $formacao['nm_instituicao'], 
                        $formacao['dt_termino'], 
                        $formacao['fl_concluido']);
            }
        }
    }
    
    private function buscarQualificacoesDoCurriculo($id_curriculo) {
        
        $sql = 'SELECT * FROM tb_qualificacao WHERE fk_id_curriculo = ' . $id_curriculo;
        $result = $this->pdo->query($sql);
        
        if (!empty($result)) {
            while($qualificacao = $result->fetch(PDO::FETCH_ASSOC)) {
                $this->curriculo->adicionaQualificacao(
                        $qualificacao['id_qualificacao'], 
                        $qualificacao['nm_qualificacao']);
                
            }
        }
    }
    
    private function buscarIdiomasDoCurriculo($id_curriculo) {
        
        $sql = 'SELECT * FROM tb_idioma WHERE fk_id_curriculo = ' . $id_curriculo;
        $result = $this->pdo->query($sql);
        
        if (!empty($result)) {
            while($idioma = $result->fetch(PDO::FETCH_ASSOC)) {
                $this->curriculo->adicionaIdioma($idioma['id_idioma'],
                        $idioma['nm_idioma'], $idioma['de_idioma'], 
                        $idioma['de_nivel']);
                
            }
        }
    }
}
