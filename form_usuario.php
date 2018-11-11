<?php

    session_start();
    


$idUsuario = $_GET["id"];

if($idUsuario > 0){

    $servidor = "cursophpleo_db_1";
    $usuario = "root";
    $senha = "phprs";
    $banco = "curso-php";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    if($conn->connect_error){
        die("Erro ao tentar conectar no banco de dados:".$conn->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE id = ".$idUsuario;

    $result = $conn->query($sql);
    if($result->num_rows > 0){

        $row = $result->fetch_assoc();
        $id = $row["ID"];
        $email = $row["email"];
        $pass = $row["senha"];
        $status = $row["status"];
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuários</title>
    </head>
    <body>
        <form action="atualizar_usuario.php" method="POST">
            <label>Email</label><br>
            <input type="text" name="email" value="<?=$email?>"/><br><br>

            <label>Senha</label><br>
            <input type="password" name="pass" value="<?=$pass?>"/><br><br>

            <label>Status</label><br>
            <select name="status">
                <option value="0" <?=$status==0?"SELECTED":"";?>>0 (Inativo)</option>
                <option value="1" <?=$status==1?"SELECTED":"";?>>1 (Ativo)</option>
            </select>
            <br><br>

            <input type="submit" value="Gravar dados" /><br>

            <input type="hidden" name="id" value="<?=$id?>"/>

        </form>

        <br>
        <a href="Index.php">Voltar</a>
    </body>
</html>