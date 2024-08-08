<?php
function ordenarDecrescente($num1, $num2, $num3) {
    
    $maior = max($num1, $num2, $num3);

    
    $menor = min($num1, $num2, $num3);

   
    $meio = ($num1 + $num2 + $num3) - ($maior + $menor);

    echo "$maior $meio $menor"; 
}

$numero1 = 7;
$numero2 = 3;
$numero3 = 9;
echo "Números em ordem decrescente: ";
ordenarDecrescente($numero1, $numero2, $numero3);
?>
