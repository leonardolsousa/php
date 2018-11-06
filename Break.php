<?php

$numeroinicial = 1;
$numerofinal = 100;
$numeroy = 5;

for($i=1;$i<=$numerofinal;$i++){
    $div = $i % $numeroy;

    if($div == 0){
        echo "Os numeros divisores pelo numero y definido são: ".$i."<br>";
    }
}

    
?>