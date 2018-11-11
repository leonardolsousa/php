<?php

    session_start();
    


    $servidor = "cursophpleo_db_1";
    $usuario = "root";
    $senha = "phprs";
    $banco = "curso-php";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    if($conn->connect_error){
        die("A conexão falhou:".$conn->connect_error);
    }

?>