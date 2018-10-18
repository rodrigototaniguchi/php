<?php
    $pessoas = array();

    //adiciona items no array
    // => seta o valor que deve ser gravado
    // nome = chave
    array_push($pessoas, array(
        'nome' => 'João' ,
        'idade' => 20
    )); //adiciona items no array

    array_push($pessoas, array(
        'nome' => 'Kakaroto' ,
        'idade' => 35
    )); 
    
    //print_r($pessoas);
    
    echo json_encode($pessoas);
?>