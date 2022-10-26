<?php

require_once('Database.php');
$db->readLogin();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    foreach($db->users as $index => $value) {
        if($_POST['username'] == $db->users[$index] and $_POST['password'] == $db->passwords[$index]){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = $db->users[$index];
            header("location: index.php");
            break;
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Jogadores</title>
</head>
<body>
    
    <h1 class="page-title">Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="field">
            <input type="text" class="input" name="username" placeholder="Usuário" required>
        </div>
        <div class="field">
            <input type="password" class="input" name="password" placeholder="Senha" required>
        </div>
        <div class="field">
            <input type="submit" value="Login">
        </div>
    </form>

</body>
</html>