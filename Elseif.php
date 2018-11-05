<?php

$nome = "João Lucas";
$salario = 2000;

if($salario < 1000){
    echo "Uau! Você não vai pagar nada de imposto!";
}elseif($salario < 1500){
    echo "Eita! Você paga 10% de imposto!";
}elseif($salario < 2000){
    echo "Caraca! Você paga 15% de imposto!";
}else{
    echo "Eita pega! Você paga 20% de imposto!";
}
?>