<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos foram preenchidos
    if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["email"]) || empty($_POST["confirm-email"]) || empty($_POST["nascimento"]) || empty($_POST["state"]) || empty($_POST["terms"])) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $confirmEmail = $_POST["confirm-email"];
        $birthYear = $_POST["nascimento"];
        $state = $_POST["state"];
        $terms = $_POST["terms"];

        // Verifica se os emails são iguais
        if ($email !== $confirmEmail) {
            echo "Os emails não coincidem.";
        } else {
            // Verifica se a pessoa tem mais de 18 anos
            $currentYear = date("Y");
            if (($currentYear - $birthYear) < 18) {
                echo "Você deve ter mais de 18 anos para se cadastrar.";
            } else {
                // Verifica se os termos foram aceitos
                if ($terms !== "on") {
                    echo "Você deve aceitar os termos.";
                } else {
                    if(substr_count($email, "@") != 1){
                        echo "Email inválido";
                    }else {
                    // Processa o formulário
                    echo "Formulário enviado com sucesso!";
                    // Aqui você pode adicionar o código para salvar os dados no banco de dados ou fazer qualquer outra ação necessária
                    }
                }
            }
        }
    }
} else {
    // Se o formulário não foi submetido corretamente
    echo "O formulário não foi submetido corretamente.";
}
?>
