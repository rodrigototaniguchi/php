<?php
    
    //include "exemplo-01.php";
    // require - obriga que o arquivo esteja correto
    // include - tenta rodar mesmo que não esteja correto

    require "exemplo-01.php";
    require_once "exemplo-01.php"; //traz somente uma vez o arquivo
    $resultado = somar(10,20);

    echo $resultado;

?>