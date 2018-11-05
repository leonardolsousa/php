<?php

$numeroinicial = 1 ;
$numerofinal = 20;

$contador = $numeroinicial;

while($contador <= $numerofinal){
    $contador++;
    if($contador % 2 == 0){
        echo $contador."<br>";;
    }
}
?>