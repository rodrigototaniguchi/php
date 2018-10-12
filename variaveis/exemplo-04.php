<?php
    //Array super global
    //Variável super global get/post será sempre string, para converter para inteiro (int)

    
    $nome = (int)$_GET["a"];    

    //var_dump($nome);
    
    //obter ip
    $ip = $_SERVER["REMOTE_ADDR"];
    
    //pasta/arquivo
    $ip = $_SERVER["SCRIPT_NAME"];
    
    echo $ip;
?>    