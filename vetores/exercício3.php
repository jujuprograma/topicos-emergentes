<?php
session_start();

if (!isset($_SESSION['lista_convidados'])) {
    $_SESSION['lista_convidados'] = array();
}

if (isset($_POST['nome']) && !empty(trim($_POST['nome']))) {
    $nome = trim($_POST['nome']);
    $_SESSION['lista_convidados'][] = $nome;
    $mensagem = "Convidado '$nome' adicionado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Convidados</title>
</head>
<body>
    <h2>Controle de Lista de Convidados para Festa</h2>

    <form method="post">
        <label for="nome">Nome do Convidado:</label>
        <input type="text" name="nome" id="nome" required>
        <button type="submit">Adicionar</button>
    </form>

    <?php
    if (isset($mensagem)) {
        echo "<p style='color:green;'>$mensagem</p>";
    }
    ?>

    <h3>Lista Atual de Convidados:</h3>
    <?php if (empty($_SESSION['lista_convidados'])): ?>
        <p>Nenhum convidado adicionado ainda.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['lista_convidados'] as $convidado): ?>
                <li><?= htmlspecialchars($convidado) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
