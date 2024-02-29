<?php
include 'connection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM usuarios WHERE user = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $password);

    $stmt->execute();
    $stmt->bind_result($id);
    $stmt->fetch();

    if ($id) {
        $_SESSION['login_user'] = $user;

        header("location: home.php");
    } else {
        $error = "Seu nome de usuário ou senha está inválido";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>SGM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="default-form">
        <form action="index.php" method="post">
            <h1>SGM</h1>
            <label for="user">Usuário:</label>
            <input type="text" id="user" name="user" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <?php
            if(isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
            <button type="submit">Login</button>
            <a href="register.php">Registrar usuário</a>
        </form>
    </div>

</body>

</html>