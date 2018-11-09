<?php

$servidor = "cursophpleo_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso-php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("A conexão falhou: ".$conn->connect_error);
}

$sql = "SELECT * FROM `usuarios`";
$result = $conn->query($sql);

if($result->num_rows > 0){
    print("<pre>");
    var_dump($result);

    echo "Registros retornados: ".$result->num_rows;
}else{
    echo "Não retornou resultado!";
}

$conn->close();

?>