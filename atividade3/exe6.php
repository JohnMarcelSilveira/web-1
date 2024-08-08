<?php
function ordenarDecrescente($num1, $num2, $num3) {
    
    $maior = max($num1, $num2, $num3);

    
    $menor = min($num1, $num2, $num3);

    echo "O maior número foi $maior e o menor foi $menor"; 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
    ordenarDecrescente($numero1, $numero2, $numero3);
}
?>