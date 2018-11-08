<?php

$times = array(
    "Santos",
    "São Paulo",
    "Cruzeiro",
    "Flamengo",
    "Fluminense",
    "Botafogo",
    "Vasco",
    "Atlético-MG",
    "Atlético-PR",
    "Corinthians",
    "Grêmio",
    "Internacional",
    "Bahia",
    "Vitória",
    "Ceará",
    "Sport",
    "América-MG",
    "Chapecoense",
    "Paraná",
    "Palmeiras"
);

$jogos = array(
    "Santos",
    "São Paulo",
    "Cruzeiro",
    "Flamengo",
    "Fluminense",
    "Botafogo",
    "Vasco",
    "Atlético-MG",
    "Atlético-PR",
    "Corinthians",
    "Grêmio",
    "Internacional",
    "Bahia",
    "Vitória",
    "Ceará",
    "Sport",
    "América-MG",
    "Chapecoense",
    "Paraná",
    "Palmeiras"
);

foreach($times as $time){
    foreach($jogos as $jogo){
        if($time === $jogo){
            continue;
        }else{
        echo "Jogos do Brasileirão: ".$time." X ".$jogo."<br><br>";
        }
    }
}
?>