<?php

$numero = 10;
$divisivel10 = 10;
$divisivel5 = 5;
$divisivel2 = 2;

if(($numero % $divisivel10) == 0 && ($numero % $divisivel5) == 0 && ($numero % $divisivel2) == 0){
    echo "O número escolhido é divisivel por 10, 5 e 2";
}elseif(($numero % $divisivel10) == 0 && ($numero % $divisivel5) == 0){
    echo "O número escolhido é divisivek por 10 e 5";
}elseif(($numero % $divisivel10) == 0 && ($numero % $divisivel2) == 0){
    echo "O número escolhido é divisivel por 10 e 2";
}elseif(($numero % $divisivel5) == 0 && ($numero % $divisivel2) == 0){
    echo "O número escolhido é divisivel por 5 e 2";
}elseif(($numero % $divisivel10) == 0){
    echo "O número escolhido é divisivel por 10";
}elseif(($numero % $divisivel5) == 0){
    echo "O número escolhido é divisivel por 5";
}elseif(($numero % $divisivel2) == 0){
    echo "O número escolhido é divisivel por 2";
}else{
    echo "O número escolhido não é divisivel por 10, 5 e 2";
}
?>