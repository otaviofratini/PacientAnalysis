<?php
    require_once 'class\paciente.class.php';
    
/* --------------------------- FUNCIONALIDADE PRINCIPAL DE LEITURA DO CSV ---------------------------
    $file = file('gerint_solicitacoes_mod.csv');

    foreach($file as $k){
        $csv[] = explode(';',$k); //lê o arquivo csv e insere dentro da Matriz $csv
    }

    $count = sizeof($csv); // variável criada para delimitar o tamanho das linhas da Matriz
    
    for($i=1;$i<$count;$i++){
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
    } 
*/


    function requisito1(){
        $file = file('gerint_solicitacoes_mod.csv');

        foreach($file as $k){
            $csv[] = explode(';',$k);
        }
        
        $count = sizeof($csv); // variável criada para delimitar o tamanho das linhas da Matriz
        $contador = 0; // variável criada para contar os pacientes de um determinado município
        $cont_genM = 0; // variável criada para contar pacientes do genero masculino
        $cont_genF = 0; // variável criada para contar pacientes do genero feminino
        $arrayIdadeM = []; // array criado para idades masculinas
        $arrayIdadeF = []; // array criado para idades femininas
        $arrayIdades = []; // array para todas as idades
        $municipio_inf = trim(strtoupper($_POST['municipio']));
        for($i=1;$i<$count;$i++){
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
            if($paciente->getMunicipio_residencia() == $municipio_inf){
                $arrayIdades[$contador] = $paciente->getIdade();
                $contador++;
                if($paciente->getSexo() == "MASCULINO"){
                    $arrayIdadeM[$cont_genM] = $paciente->getIdade();
                    $cont_genM++;
                }
                if($paciente->getSexo() == "FEMININO"){
                    $arrayIdadeF[$cont_genF] = $paciente->getIdade();
                    $cont_genF++;
                }
            }
        }
        $resultTot = array_sum($arrayIdades)/$contador; // Media de todas as idades
        $resultM = array_sum($arrayIdadeM)/$cont_genM; // Media das idades masculinas
        $resultF = array_sum($arrayIdadeF)/$cont_genF; // Media das idades femininas
        echo "Tem $contador pacientes em $municipio_inf<br>";
        echo "$cont_genM pacientes do gênero masculino <br>";
        echo "$cont_genF pacientes do gênero feminino <br>";
        echo "Média das idades masculinas é $resultM <br>";
        echo "Média das idades femininas é $resultF <br>";
        echo "Média de todas as idades é $resultTot <br>";
    }

?>