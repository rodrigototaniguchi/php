<?php
    $json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Kakaroto","idade":35}]';
    $data = json_decode($json,true);
    // Sem true, decodifica como objeto, com true como array
    
    var_dump($data);
?>