<?php

session_start();

$_SESSION['contador'] = $_SESSION['contador'] +1;

echo "Requisições ao atualizar a quarta página: ".$_SESSION['contador']."<br><br>";


print("<pre>");
var_dump($_SESSION);

?>