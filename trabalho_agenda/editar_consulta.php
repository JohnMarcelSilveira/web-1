<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Consulta - Agenda Veterinária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="painel.php">Agenda Veterinária</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="painel.php">Consultas Marcadas</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Bem-vindo, <?php echo $_SESSION['nome']; ?>!
                    <a href="index.php" class="btn btn-outline-light btn-sm ms-2">Sair</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Editar Consulta</h2>
        <form action="processa_edicao.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="mb-3">
                <label for="data" class="form-label">Data:</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora:</label>
                <input type="time" name="hora" id="hora" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="motivo" class="form-label">Motivo:</label>
                <textarea name="motivo" id="motivo" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Editar Consulta</button>
        </form>
    </div>
</body>
</html>



