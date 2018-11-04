<?php

$nome = "Tiago";
/* $idade = 22; utilizando a maioridade juridica para a estrutura de decisão cair no if */
$idade = 20; /* utilizando a menoridade juridica para a estrutura de decisão cair no else */

echo "Me chamo ".$nome.".<br>";

if($idade >= 21){
    echo "Eu tenho maioridade jurídica!";
}else{
    echo "Eu não tenho maioridade jurídica!";
}

?>