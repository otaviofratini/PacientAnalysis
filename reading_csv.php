<?php
    
    $file = file('gerint_solicitacoes_mod.csv');

    foreach($file as $k){
        $csv[] = explode(';',$k);
    }
    echo '<pre>';
    //var_dump($csv); | comentei para fazer os testes de qual informação consta nos índices
    
    //organização das colunas da Matriz

    var_dump($csv[0][1]);   //id_usuario
    var_dump($csv[0][2]);   //situacao
    var_dump($csv[0][3]);   //central_regulacao_origem
    var_dump($csv[0][4]);   //data_solicitacao
    var_dump($csv[0][5]);   //sexo
    var_dump($csv[0][6]);   //idade
    var_dump($csv[0][7]);   //municipio_residencia
    var_dump($csv[0][8]);   //solicitante
    var_dump($csv[0][9]);   //municipio_solicitante
    var_dump($csv[0][10]);  //codigo_cid
    var_dump($csv[0][11]);  //carater
    var_dump($csv[0][12]);  //tipo_internacao
    var_dump($csv[0][13]);  //tipo_leito
    var_dump($csv[0][14]);  //data_autorizacao
    var_dump($csv[0][15]);  //data_internacao
    var_dump($csv[0][16]);  //data_alta
    var_dump($csv[0][17]);  //executante
    var_dump($csv[0][18]);  //horas_na_fila

    $ns = trim($csv[50998][18]); //retirar o espaço em branco
    var_dump($ns); //limite da Matriz

    echo '</pre>';
    

?>