<?php

session_start();

$_SESSION['contador'] = $_SESSION['contador'] +1;

echo "Requisições ao atualizar a terceira página: ".$_SESSION['contador']."<br><br>";

?>

<a href="quarta.php">Quarta Página</a><br><br>

<?php

print("<pre>");
var_dump($_SESSION);

?>