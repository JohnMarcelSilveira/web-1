
<?php

$numeros = array();
$total = 0;

for($i = 0; $i <5; $i++){
    $numeros[$i] = rand(0,100);
    $total = $total + $numeros[$i];
}
$media = $total / count($numeros);

echo "Números maiores do que a média ($media): ";
foreach ($numeros as $numero) {
    if ($numero > $media) {
        echo "$numero ";
    }
}
?>
