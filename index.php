<?php

require_once('Database.php');

session_start();

if ($_SESSION['loggedin'] == FALSE) {
    header("location: login.php");
}

if (isset($_POST['name']) && isset($_POST['team']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $team = $_POST['team'];
    $age = $_POST['age'];
    $db->createJogador($name, $team, $age);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <h1 class="page-title">Cadastrar jogador</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="field">
            <input type="text" class="input" name="name" placeholder="Nome" required>
        </div>
        <div class="field">
            <input type="text" class="input" name="team" placeholder="Time" required>
        </div>
        <div class="field">
            <input type="number" class="input" name="age" placeholder="Idade" required>
        </div>
        <div class="field">
            <input type="submit" value="Cadastrar">
        </div>
    </form>

    <a href="jogadores.php" class="link">Ver todos</a>
    <a href="logout.php" class="link">Fazer logout</a>
</body>
</html>