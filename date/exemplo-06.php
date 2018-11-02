<?php
    $dt = new DateTime();
    $periodo = new DateInterval("P15D");

    echo $dt->format("d/m/Y h:i:s");

    $dt -> add($periodo); // -> utilizar o método 

    echo "<br/>";
    echo $dt->format("d/m/Y h:i:s");

?>