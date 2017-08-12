<?php

function calculaIdade($data_nascimento) {
    $idade = date_diff(date_create($data_nascimento), date_create('now'))->y;
    
    return $idade;
}

function dataComMesEAno($data) {
    setlocale(LC_TIME, 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    
    return utf8_encode(strftime("%B/%Y", strtotime($data)));
}


