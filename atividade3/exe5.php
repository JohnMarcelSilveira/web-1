<!DOCTYPE html>
<html>
<head>
    <title>Clínica Pediátrica</title>
</head>
<body>

<h2>Informe o número de pacientes atendidos</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="num_pacientes">Número de pacientes:</label>
    <input type="number" id="num_pacientes" name="num_pacientes" min="1" required><br><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_pacientes = $_POST["num_pacientes"];
        $idades = array();

        
        for ($i = 1; $i <= $num_pacientes; $i++) {
            echo "<label for='idade_paciente_$i'>Idade do paciente $i:</label>";
            echo "<input type='number' id='idade_paciente_$i' name='idade_paciente_$i' min='0' required><br>";
        }

        echo "<br><input type='submit' value='Calcular'>";
    }
    ?>

</form>

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idades_count = array(); 

    
    for ($idade = 0; $idade <= 120; $idade++) {
        $idades_count[$idade] = 0;
    }

    
    for ($i = 1; $i <= $num_pacientes; $i++) {
        $idade = $_POST["idade_paciente_$i"];
        $idades_count[$idade]++;
    }

    
    echo "<h2>Porcentagem de pacientes em cada idade:</h2>";
    foreach ($idades_count as $idade => $count) {
        if ($count > 0) {
            $porcentagem = ($count / $num_pacientes) * 100;
            echo "Idade $idade: " . number_format($porcentagem, 2) . "%<br>";
        }
    }
}
?>

</body>
</html>
