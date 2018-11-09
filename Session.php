<?php

session_start();

$_SESSION['contador'] = $_SESSION['contador'] +1;

echo "Requisições ao atualizar a página: ".$_SESSION['contador']."<br><br>";

?>

<a href="segunda.php">Segunda Página</a><br><br>

<?php

print("<pre>");
var_dump($_SESSION);


?>