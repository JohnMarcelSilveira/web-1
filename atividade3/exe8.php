<?php
function ordenarDecrescente($num1, $num2, $num3) {
    
    $maior = max($num1, $num2, $num3);

    
    $menor = min($num1, $num2, $num3);

   
    $meio = ($num1 + $num2 + $num3) - ($maior + $menor);

    echo "$maior $meio $menor"; 
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
    echo "Números em ordem decrescente: ";
    ordenarDecrescente($numero1, $numero2, $numero3);
}
?>
