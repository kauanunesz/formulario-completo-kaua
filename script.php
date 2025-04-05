<?php
// Tratando os dados recebidos
$nome = $_GET['nome'] ?? 'Não informado';
$email = $_GET['email'] ?? 'Não informado';
$idade = $_GET['Idade'] ?? 'Não informado';
$dataNascimento = $_GET['dtNasc'] ?? 'Não informado';
$senha = $_GET['senha'] ?? 'Não informado';
$nivelXP = $_GET['nivelXP'] ?? 'Não informado';
$habilidades = $_GET['hab'] ?? [];
$sistema = $_GET['sistema'] ?? 'Não informado';

// Convertendo valor do sistema operacional
$sistemas = [
    '1' => 'Windows',
    '2' => 'Linux',
    '3' => 'MacOS',
    '4' => 'Outro'
];
$sistemaTexto = $sistemas[$sistema] ?? 'Não selecionado';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">
        <img src="img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Formulário
    </a>
</nav>

<div class="container mt-5">
    <h1 class="mb-4">Dados Recebidos</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
        <li class="list-group-item"><strong>Idade:</strong> <?= htmlspecialchars($idade) ?></li>
        <li class="list-group-item"><strong>Data de Nascimento:</strong> <?= htmlspecialchars($dataNascimento) ?></li>
        <li class="list-group-item"><strong>Nível de Experiência:</strong> <?= htmlspecialchars($nivelXP) ?></li>
        <li class="list-group-item">
            <strong>Habilidades:</strong>
            <?php if (!empty($habilidades)): ?>
                <ul>
                    <?php foreach ($habilidades as $hab): ?>
                        <li><?= htmlspecialchars($hab) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                Nenhuma habilidade selecionada.
            <?php endif; ?>
        </li>
        <li class="list-group-item"><strong>Sistema Operacional:</strong> <?= htmlspecialchars($sistemaTexto) ?></li>
    </ul>

    <a href="index.html" class="btn btn-primary mt-4">Voltar</a>
</div>

</body>
</html>
