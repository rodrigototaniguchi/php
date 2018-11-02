<?php
    function incluirClasses($nomeClasse) {
        if (file_exists($nomeClasse. ".php") == true ) {
            require_once($nomeClasse .".php");  
            //var_dump($nomeClasse);
        }
        
    }
    spl_autoload_register("incluirClasses");

    spl_autoload_register(function($nomeClasse) {
                if (file_exists("abstrata" . DIRECTORY_SEPARATOR .  $nomeClasse.".php") === true ) {
                  require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse .".php");      
                }
        });

    $carro = new DelRey() ;
    $carro -> acelerar(100);
?>