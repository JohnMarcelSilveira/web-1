<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST["idade"];

    if($idade < 13) {
        echo "Classificação etária: criança";
    } elseif($idade >= 13 && $idade < 18) {
        echo "Classificação etária: Adolescente";
    } elseif($idade >= 18 && $idade <= 60) {
        echo "Classificação etária: Adulto";
    } else {
        echo "Classificação etária: Idoso";
    }

}

?>