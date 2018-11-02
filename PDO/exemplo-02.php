<?php

    $conn = new PDO("sqlsrv:Database=dbphp7;Server=localhost;ConnectionPooling=0",NULL,NULL);

    $stmt = $conn ->prepare("select deslogin from tb_usuarios order by deslogin") ;
    
    $stmt -> execute();
    
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC) ;
    
    //var_dump($results);
    foreach ($results as $row) {
        foreach ($row as $key=> $value) {
            echo "<strong>".$key.":</strong>" . $value . "<br/>";
        }
        echo "====================== <br/>";
    }
?>