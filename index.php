<?php

require 'DAO/CurriculoDAO.class.php';
require 'includes/ConexaoDB.class.php';
require 'includes/config.inc.php';
require 'includes/funcoes.inc.php';
require 'models/Curriculo.class.php';
require 'models/Experiencia.class.php';
require 'models/Formacao.class.php';
require 'models/Idioma.class.php';
require 'models/Qualificacao.class.php';
require 'models/Telefone.class.php';

$dao = new CurriculoDAO(ConexaoDB::getInstance());

$curriculo = $dao->buscarPorId(1);

$telefones = $curriculo->getTelefones();
$idiomas = $curriculo->getIdiomas();
$qualificacoes = $curriculo->getQualificacoes();
$experiencias = $curriculo->getExperiencias();
$formacoes = $curriculo->getFormacoes();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Currículo</title>
    <link rel="stylesheet" type="text/css" href="css/curriculo.css" />
</head>

<body>
    <div id="curriculo">
        <div id="foto">
            <img src="fotos/foto_1.jpg" />
        </div>
        <div id="info">
            <h1><?php echo $curriculo->getNome(); ?></h1>
            <p><?php echo $curriculo->getInformacoes() . ', ' .
                    calculaIdade($curriculo->getDataNascimento()) . ' anos'; ?>
            <br />
            Fones:
            <?php
                foreach($telefones as $telefone) {
                   echo $telefone->getDescricao() . ' / ';
                }
            ?><br />
            Email: <?php echo $curriculo->getEmail(); ?><br />
            Endereço: <?php echo $curriculo->getEndereco(); ?>
            </p>
        </div>
        <h2>Objetivo</h2>
        <p><?php echo $curriculo->getObjetivo(); ?></p>

        <h2>Formação</h2>
        <?php

            foreach($formacoes as $formacao) {

                $status = $formacao->getConcluido() == 1 ? 'Concluído' : 'Em andamento';
                $previsao = $formacao->getConcluido() != 1 ?  ''
                        . '<br />Previsão de conclusão: '
                    . dataComMesEAno($formacao->getDataTermino())  : '';

                echo '<p class="formacao">' . $formacao->getNome() . ' - ' . $formacao->getCurso()
                        . ' pela ' . $formacao->getInstituicao() . ' - ' . $status;

                echo $previsao . '</p>';
            }
        ?>


        <h2>Experiências</h2>
        <?php
            foreach($experiencias as $experiencia) {
                echo '<p class="experiencias"><b>Cargo: </b>' . $experiencia->getCargo() .
                        ' - ' . dataComMesEAno($experiencia->getDataInicio()) . ' a ' .
                        dataComMesEAno($experiencia->getDataTermino()) . '<br />';
                echo '<b>Empresa: </b>' . $experiencia->getEmpresa() . '</br>';
                echo '<b>Descrição: </b>' . $experiencia->getDescricao();
            }
        ?>

        <h2>Qualificações</h2>
        <p>
            <?php
                foreach($qualificacoes as $qualificacao) {
                    echo $qualificacao->getNome() . '</br>';
                }
            ?>
        </p>

        <h2>Idiomas</h2>
        <?php
            foreach($idiomas as $idioma) {
                echo '<p>' . $idioma->getNome() . ' - ' . $idioma->getDescricao() . ' - ' .
                        $idioma->getNivel() . '</p>';
            }
        ?>
    </div>
</body>

</html>
