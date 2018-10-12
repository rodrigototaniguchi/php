<?php
    $a = 10;
    $b = NULL ;
    $c = 20 ;

    echo $a ?? $b ?? $c; // ?? php 7.0 - verifica se variável está nula, exibindo a primeira variável não nula
?>