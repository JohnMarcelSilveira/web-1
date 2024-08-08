<?php

    $var = array();

    for($i = 0; $i <15; $i++){
        $var[] = rand(0,100);
    }

    foreach($var as $numero){
        if($numero % 2 == 0){
            echo "$numero é par <br>";
        }else{
            echo "$numero é impar<br>";
        }
    }
        
?>
