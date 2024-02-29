


<!DOCTYPE html>
<html>
<head>
    <title>Venda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div id="default-form">
    <h1>Iniciar Venda</h1>

    <form action="venda.php" method="post">
        <label for="produto">Produto:</label>
        <input type="text" id="produto" name="produto" required>
        <br><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required>
        <br><br>
        <input type="submit" value="Vender">

    </form>

    </div>
        
</body>
</html>