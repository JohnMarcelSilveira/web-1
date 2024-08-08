<?php


// Verifica se o formulário foi submetido

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $erro[] = array();

    // Verifica se todos os campos foram preenchidos
    if (trim($nome) == NULL || trim($email) == NULL) {
        $erro[] = "Por favor, preencha o campo nome e email.";
    } 
    // Verifica se o email é válido
    if(substr_count($email, "@") != 1){
        $erro[] = "Email inválido";
    } 

    
    if (count($erro) > 0) {
         echo "<pre>";
         print_r($erro);
         echo "</pre>";
    }
}

?>
