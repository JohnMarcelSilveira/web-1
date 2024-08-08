
<?php
    $notas = array();

    $notas[]  = 10;     
    $notas[]  = 6.9;
    $notas[]  = 5;
    $media = 0;

    foreach($notas as $nota){
        $media = $media + $nota;
    }

    $media = $media / count($notas);

    if($media >= 6) {
        echo "Aprovado com média $media";
    } else {
        echo "Reprovado com média $media";
    }


?>