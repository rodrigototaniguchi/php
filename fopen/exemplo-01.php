<?php
    $file = fopen("log.txt" , "a+") ;
    
    fwrite($file , date("Y-m-d H:i:s") . "\r\n") ; // \r\n gera uma nova linha com conteúdo
    fclose($file) ;
    echo "Arquivo criado com sucesso";
?>