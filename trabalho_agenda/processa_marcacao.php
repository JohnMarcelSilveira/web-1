<?php
session_start();
include 'conexao.php';

$id_usuario = $_SESSION['id_usuario'];
$idade = $_POST['idade'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$motivo = $_POST['motivo'];

$sql = "INSERT INTO consultas (id_usuario, idade, data, hora, motivo) VALUES ('$id_usuario', '$idade', '$data', '$hora', '$motivo')";

if (mysqli_query($conn, $sql)) {
    echo "Consulta marcada com sucesso!";
    header("Location: painel.php");
} else {
    echo "Erro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
