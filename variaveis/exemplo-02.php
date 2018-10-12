<?php

//variavel

$nome = "João";

$sobrenome = "Kakaroto" ;

$nomeCompleto = $nome . " " . $sobrenome;
//echo $nome;
echo $nomeCompleto ; 
echo "<br/>";

unset($nome);

if (isset($nome)) {
    echo $nome;
}


?>