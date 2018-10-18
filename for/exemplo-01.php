<?php

    for($i = 0; $i<1000; $i += 5 ) {
        if ($i > 200 && $i < 800) {
            continue; //Incrementa o registro e ignora o echo
        }
        echo $i . "<br/>";
    }
?>