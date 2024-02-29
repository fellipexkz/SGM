<?php 
    include "connection.php";
    session_start();
    if(!isset($_SESSION['login_user'])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="container">
        <h1>Bem vindo</h1>

        <p>Olá, <?php echo $_SESSION['login_user']; ?></p>

        <a href="venda.php"><button>Iniciar Venda</button></a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>