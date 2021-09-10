<?php
    
    $file = file('gerint_solicitacoes_mod.csv');

    foreach($file as $k){
        $csv[] = explode(';',$k);
    }
    echo '<pre>';
    //var_dump($csv); | comentei para fazer os testes de qual informação consta nos índices
    var_dump($csv[0][1]);
    var_dump($csv[1][1]);
    var_dump($csv[50998][1]);
    // Aqui eu realizei o teste para verificar se a Matriz ficou organizada 
    echo '</pre>';
    

?>