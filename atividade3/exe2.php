<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];


    $adicao = $_POST["adicao"];
    $subtracao = $_POST["subtracao"];
    $multiplicacao = $_POST["multiplicacao"];
    $divisao = $_POST["divisao"];

    // Verifica as respostas e conta os acertos
    $acertos = 0;

    if ($adicao == $numero1 + $numero2) {
        $acertos++;
    }

    if ($subtracao == $numero1 - $numero2) {
        $acertos++;
    }

    if ($multiplicacao == $numero1 * $numero2) {
        $acertos++;
    }

    if ($divisao == $numero1 / $numero2) {
        $acertos++;
    }

    // Mostra a quantidade de acertos
    echo "\nVocê obteve $acertos acerto(s).\n";
}
?>