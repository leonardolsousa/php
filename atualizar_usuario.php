<?php

    session_start(); 

$email = $_POST["email"];
$pass = md5($_POST["pass"]); 
$status = $_POST["status"];
$id = $_POST["id"];

$servidor = "cursophpleo_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso-php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("Falha ao  tentar conectar no banco de dados:".$conn->connect_error);
}

if($id > 0){

    $sql = " UPDATE usuarios SET ";
    $sql .= " email = '".$email."' ";
    $sql .= " ,senha = '".$pass."' ";
    $sql .= " ,status = '".$status."' ";
    $sql .= " WHERE id = ".$id;


}else{

    $sql = " INSERT INTO usuarios ";
    $sql .= " (email, senha, status) ";
    $sql .= " VALUES ";
    $sql .= " ('".$email."', ";
    $sql .= " '".$pass."', ";
    $sql .= " ".$status.") ";
}


if($conn->query($sql) === TRUE){
    echo "Dados gravados com sucesso! <br><br>";
}else {
    echo "Erro ao tentar inserir os dados:".$conn->error;
}

$conn->close();
?>

<a href="Index.php">Voltar</a>