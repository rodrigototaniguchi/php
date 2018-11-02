<?php
  //  $ts = strtotime("2001-09-11");
 //    $ts = strtotime("now"); - exibe data de hoje
        $ts = strtotime("+1 day"); // acrescenta mais um dia da data de hoje

        $ts = strtotime("+1 week"); // acrescenta mais uma semana

        echo date("l, d/m/Y",$ts);

?>