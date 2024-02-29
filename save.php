<?php 

    include "connection.php";

    if (empty($_POST['user']) && empty($_POST['password'])) {
        header("Location:register.php");
    } else {
        $user = addslashes($_POST['user']);
        $password = $_POST['password'];

        $sql = "INSERT INTO usuarios (user, password) 
                VALUES ('$user','$password')";

        if ($conn->query($sql)) header("Location:register.php");
        else echo "Erro ao cadastrar usuário.";        

        $conn->close();

    }

?>