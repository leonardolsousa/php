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
   echo $result->num_rows. " registros listados!<br>";
   echo "<hr>";

   while($row = $result->fetch_assoc()){
       echo "ID: ".$row["ID"]."<br>";
       echo "Email: ".$row["email"]."<br>";
       echo "Senha: ".$row["senha"]."<br>";
       echo "<hr>";
   }
}else{
    echo "Não retornou nenhum registro!";
}

?>