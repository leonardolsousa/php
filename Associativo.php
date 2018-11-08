<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$saopaulo = array(
    "aniversario" => '25/01',
    "fundacao" => '25/01/1554',
    "gentilico" => "paulistano",
    "lema" => "Non dvcor dvco (Não sou conduzido, conduzo)",
    "padroeiro" => "São Paulo",
    "prefeito" => "Bruno Covas"
);

echo "O aniversário de São Paulo é dia: ".$saopaulo["aniversario"]."<br>";
echo "A fundação de São Paulo é: ".$saopaulo["fundacao"]."<br>";
echo "O gentilico de São Paulo é: ".$saopaulo["gentilico"]."<br>";
echo "O lema de São Paulo é: ".$saopaulo["lema"]."<br>";
echo "O padroeiro de São Paulo é: ".$saopaulo["padroeiro"]."<br>";
echo "O atual prefeito de São Paulo é: ".$saopaulo["prefeito"];

?>  