<?php
    $dir1 = "folder01" ;
    $dir2 = "folder02" ;

    if (!is_dir($dir1)) mkdir($dir1);
    if (!is_dir($dir2)) mkdir($dir2);
    
    $filename = "README.txt" ;
    if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
        $file = fopen($dir1. DIRECTORY_SEPARATOR . $filename , "w+") ;
        
        fwrite($file, "Maldito Kakaroto, sempre na minha frente");
        
        fclose($file) ;
        
    }
    rename($dir1 . DIRECTORY_SEPARATOR . $filename , //origem
           $dir2 . DIRECTORY_SEPARATOR . $filename) ; //destino

    
?>