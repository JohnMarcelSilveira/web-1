<?php
    $palavra = "sonho";

    for($i = 1; $i <= 4; $i++){  
       echo strtoupper(str_repeat($palavra . " ", $i)) . "<br>";
    }
?>
