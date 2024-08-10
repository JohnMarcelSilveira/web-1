<?php
session_start();
include 'conexao.php';

$id = $_POST['id'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$motivo = $_POST['motivo'];

$sql = "UPDATE consultas SET data = '$data', hora = '$hora', motivo = '$motivo' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Consulta editada com sucesso!";
    header("Location: painel.php");
} else {
    echo "Erro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>