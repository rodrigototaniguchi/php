<?php
    $nome = "Kakaroto";
    function teste() {
        global $nome; //comando para utilizar a variável que já foi definida fora do escopo;    
        echo $nome;
    }
    
    teste();

?>