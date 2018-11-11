<?php

    session_start();
    

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email','$pass')";

    require_once("conexaobd.php");

    if($conn->query($sql) === TRUE){
        echo "Usuario inserido com sucesso!";
    }else{
        echo "Erro ao tentar inserir usuario";
    }

?>

<a href="Index.php">Acessar</a><br><br>