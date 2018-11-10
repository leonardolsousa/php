<?php

$email = $_POST["email"];
$pass = md5($_POST["pass"]); 
$status = $_POST["status"];

$servidor = "cursophpleo_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso-php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("Falha ao  tentar conectar no banco de dados:".$conn->connect_error);
}

$sql = "INSERT INTO `usuarios` (`email`, `senha`, `status`) VALUES ('".$email."','".$pass."','".$status."')";

if($conn->query($sql) === TRUE){
    echo "Dados inseridos com sucesso! <br><br>";
}else {
    echo "Erro ao tentar inserir os dados: ".$conn_error;
}

$conn->close();
?>

<a href="tabela3.php">Voltar</a>