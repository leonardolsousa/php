<?php

$servidor = "cursophpleo_db_1";
$usuario = "root";
$senha = "phprs";

$conn = new mysqli($servidor, $usuario, $senha);

if($conn->connect_error){
    die("Erro ao tentar criar a conexão: ").$conn->connect_error;
}

echo "Conexão efetuada com sucesso";

/*Erro de login: Cannot log in to the MySQL server
mysqli_real_connect(): (HY000/1045): Access denied for user 'phprs'@'172.17.0.4' (using password: YES) */

/*Erro de senha: Cannot log in to the MySQL server
mysqli_real_connect(): (HY000/1045): Access denied for user 'root'@'172.17.0.4' (using password: YES)   */

?>