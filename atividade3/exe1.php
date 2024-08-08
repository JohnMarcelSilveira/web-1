<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>

    <?php
    // Verifica se os valores foram enviados via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $operacao = $_POST["operacao"];

        // Realiza a operação selecionada
        switch ($operacao) {
            case "soma":
                $resultado = $valor1 + $valor2;
                echo "Resultado da soma: $resultado";
                break;
            case "subtracao":
                $resultado = $valor1 - $valor2;
                echo "Resultado da subtração: $resultado";
                break;
            case "multiplicacao":
                $resultado = $valor1 * $valor2;
                echo "Resultado da multiplicação: $resultado";
                break;
            case "divisao":
                // Verifica se o divisor é zero
                if ($valor2 != 0) {
                    $resultado = $valor1 / $valor2;
                    echo "Resultado da divisão: $resultado";
                } else {
                    echo "Não é possível dividir por zero.";
                }
                break;
            case "potenciacao":
                $resultado = pow($valor1, $valor2);
                echo "Resultado da potenciação: $resultado";
                break;
            default:
                echo "Operação inválida.";
        }
    } else {
        echo "Método de requisição inválido.";
    }
    ?>
</body>
</html>
