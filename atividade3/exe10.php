<?php
if(isset($_POST['peso']) && isset($_POST['altura'])){
    
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);
    
    
    echo "<h2>Resultados</h2>";
    echo "<p>Seu IMC é: $imc</p>";
    if($imc >= 25){
        echo "<p>Você está acima do peso</p>";
    } else {
        echo "<p>Você está saudável</p>";
    }
} else {
    
    echo "<h2>Erro</h2>";
    echo "<p>Por favor, preencha todos os campos.</p>";
}



?>