<?php
    // date("Y") - retorna ano com 4 digitos
    // date("y") - retorna ano com 2 digitos

    echo "<select>";
    for ($i = date("Y"); $i > date("Y") - 100; $i--) {
        echo '<option value ="'.$i.'">' .$i. '</option>';
        
    }
    echo "</select>";
?>
