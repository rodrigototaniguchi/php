<?php
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7;","root","");
    
    $stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values (:LOGIN,:PASSWORD)");
    
    $login = "Trunks";
    $password = "159753" ;
    
    $stmt -> bindparam(":LOGIN",$login) ;
    $stmt -> bindparam(":PASSWORD",$password) ;
    
    $stmt -> execute();

    echo "Inserção ok" ; 

?>