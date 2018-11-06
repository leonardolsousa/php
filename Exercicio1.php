<?php

$numero1 = 10 ;
$numero2 = 20;
$numerosoma = 8;
$numerosubtracao = 5;

$soma = $numero1 + $numero2;

if ($soma > 20){
    echo"A soma é $soma+$numerosoma = ".($soma+$numerosoma);
}elseif($soma <= 20){
    echo "A subtração é $soma-$numerosubtracao = ".($soma-$numerosubtracao);
}

?>