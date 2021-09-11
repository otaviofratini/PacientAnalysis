<?php
    require_once 'class\paciente.class.php'; //caminho do arquivo no meu computador
    
    $file = file('gerint_solicitacoes_mod.csv');

    foreach($file as $k){
        $csv[] = explode(';',$k);
    }
    //echo '<pre>';



    $count = sizeof($csv);
    //echo $count;
   

    $arrayPacientes = array();
    for($i=1;$i<$count;$i++){
        //echo "linha $i</br>";

        //organização das colunas da Matriz
        $data_extracao = $csv[$i][0];   
        $id_usuario = $csv[$i][1];  
        $situacao = $csv[$i][2];
        $central_regulacao_origem = $csv[$i][3];
        $data_solicitacao = $csv[$i][4];
        $sexo = $csv[$i][5];
        $idade = $csv[$i][6];  
        $municipio_residencia = $csv[$i][7];
        $solicitante = $csv[$i][8];
        $municipio_solicitante = $csv[$i][9];
        $codigo_cid = $csv[$i][10];
        $carater = $csv[$i][11];
        $tipo_internacao = $csv[$i][12];
        $tipo_leito = $csv[$i][13];
        $data_autorizacao = $csv[$i][14];
        $data_internacao = $csv[$i][15];
        $data_alta = $csv[$i][16];
        $executante = $csv[$i][17];
        $horas_na_fila = $csv[$i][18];   
    
     $paciente = new Paciente(
            $data_extracao,
            $id_usuario,
            $situacao,
            $central_regulacao_origem,
            $data_solicitacao,
            $sexo,
            $idade,
            $municipio_residencia,
            $solicitante,
            $municipio_solicitante,
            $codigo_cid,
            $carater,
            $tipo_internacao,
            $tipo_leito,
            $data_autorizacao,
            $data_internacao,
            $data_alta,
            $executante,
            $horas_na_fila,
        );
        array_push($arrayPacientes, $paciente);

        //var_dump($csv[$i][1]);  //percorrer em uma determinada coluna até a última linha
    }


    

?>