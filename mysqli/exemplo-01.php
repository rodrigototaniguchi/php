<?php
    $conn = new mysqli("localhost", "root" , "" , "dbphp7");

    if ($conn->connect_error) {
        echo "Error: " . $conn-> connect_error;
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) values(?,?)");
    $stmt -> bind_param("ss" , $login , $pass);
    $login = "vegeta";
    $pass = "987654";

    $stmt -> execute();
    
    $login = "Bulma";
    $pass = "klm";

    $stmt -> execute();
?>