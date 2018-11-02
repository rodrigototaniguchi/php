<?php
    require_once("config.php");
    
    $sql = new Sql();

    $usuarios = $sql -> select("select * from tb_usuarios") ;
    
    $header = array() ;

    foreach($usuarios[0] as $key => $value) {
        array_push($header, ucfirst($key));
    }
   // print_r($header) ;

    $file = fopen("usuarios.csv" , "w+") ;

    
    fwrite($file , implode("," ,$header) . "\r\n") ; 
    

    foreach($usuarios as $row) {
        $data = array() ;
        
        foreach($row as $key => $value) {
            
            array_push($data, $value) ;
        } //foreach da coluna
        
        fwrite($file , implode("," , $data) . "\r\n");
    } //foreach da linha

    fclose($file) ;
?>