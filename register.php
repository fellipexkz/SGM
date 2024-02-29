<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Cadastro de usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="default-form">
    <form action="save.php" method="POST">
        <h1>Cadastro de  usuário</h1>
        
        <label for="user">Usuário:</label>
        <input type="text" id="user" name="user" required><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>
        
        <button type="submit">Cadastrar</button>
        <a href="index.php">Voltar</a>
    </form>

    </div>

</body>
</html>

