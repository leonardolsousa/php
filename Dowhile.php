<?php

error_reporting(E_ALL);
ini_set('display errors', 1);

$funcionarios = array("Francisco", "João", "José", "Rui", "Carlos", "Thomas");

$contador = 0;
$quantidadeFunc = count($funcionarios);

do{
    echo "Os funcionarios são: ".$funcionarios[$contador]."<br>";
    $contador++;
}while($contador < $quantidadeFunc);

?>