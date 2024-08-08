<?php
if(isset($_POST['comprimento']) && isset($_POST['largura'])){
    
    $comprimento = $_POST['comprimento'];
    $largura = $_POST['largura'];
    
    
    $area = $comprimento * $largura;
    $perimetro = 2 * ($comprimento + $largura);
    
    
    echo "<h2>Resultados</h2>";
    echo "<p>Área do retângulo: $area</p>";
    echo "<p>Perímetro do retângulo: $perimetro</p>";
} else {
    
    echo "<h2>Erro</h2>";
    echo "<p>Por favor, preencha todos os campos.</p>";
}
?>