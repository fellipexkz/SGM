<?php

    $host = "localhost";
    $port = "3306";
    $dbname = "sgm";
    $user = "root";
    $password = "user";

    $conn = new mysqli($host, $user, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
?>