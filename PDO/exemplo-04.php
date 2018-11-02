<?php
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7;","root","");
    
    $stmt = $conn -> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID ");
    
    $login = "Toppo";
    $password = "abcdefg" ;
    $id = 3 ;
    
    $stmt -> bindparam(":LOGIN",$login) ;
    $stmt -> bindparam(":PASSWORD",$password) ;
    $stmt -> bindparam(":ID",$id) ;
    
    $stmt -> execute();

    echo "Alteração ok" ; 

?>