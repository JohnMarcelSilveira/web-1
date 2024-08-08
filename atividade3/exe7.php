<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $passou = false;
    if($numero % 10 == 0){
        echo "O número $numero é divisível por 10 <br>";
        $passou = true;
    } 

    if($numero % 5 == 0){
        echo "O número $numero é divisível por 5 <br>";
        $passou = true;
    }

    if($numero % 2 == 0){
        echo "O número $numero é divisível por 2 <br>";
        $passou = true;
    }

    if(!$passou){
        echo "O número $numero não é divisível por 10, 5 ou 2";
    }
}



?>