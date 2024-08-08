<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>

<h2>Informe 10 números</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    // Define um array para armazenar os números fornecidos pelo usuário
    $numeros = array();

    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Loop para coletar os números do formulário
        for ($i = 1; $i <= 10; $i++) {
            // Verifica se o campo não está vazio e se é um número válido
            if (isset($_POST["numero$i"]) && is_numeric($_POST["numero$i"])) {
                // Adiciona o número ao array
                $numeros[] = $_POST["numero$i"];
            } else {
                // Se o campo estiver vazio ou não for um número válido, define o valor como 0
                $numeros[] = 0;
            }
        }

        // Calcula a média dos números
        $media = array_sum($numeros) / count($numeros);

        // Exibe a média
        echo "<h3>A média dos números informados é: $media</h3>";
    }
    ?>

    <!-- Loop para exibir os campos de entrada para os números -->
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <label for="numero<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
        <input type="number" name="numero<?php echo $i; ?>" id="numero<?php echo $i; ?>"><br>
    <?php endfor; ?>

    <br>
    <input type="submit" value="Calcular Média">
</form>

</body>
</html>
