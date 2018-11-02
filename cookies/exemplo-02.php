<?php
    if (isset($_COOKIE["NOME_DO_COOKIE"])) {
        //echo "Entrou no if" ; 
        var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));
        //    var_dump($_COOKIE["NOME_DO_COOKIE"]);
    }
?>