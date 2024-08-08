<?php

    $nota1 = 7;
    $nota2 = 5.6;
    $nota3 = 8;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media >= 6) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }

    echo "<br>A média do aluno é: " . ($nota1 + $nota2 + $nota3) / 3;

?>