<?php

$personalidades = array(
    "Elvis Presley",
    "Dalai Lama",
    "Abraham Lincoln",
    "John Lennon",
    "Frida Kahlo",
    "Ada Lovelace",
    "Alan Turing",
    "Stephen Hawking",
    "Albert Einstein",
    "Leonardo Da Vinci",
    "Van Gogh",
    "Jesus Cristo",
    "Madre Teresa de Calcutá",
    "Pelé",
    "Martin Luther King",
    "Rainha Elizabeth II",
    "William Shakespeare",
    "Margaret Thatcher",
    "Isaac Newton",
    "Nikola Tesla"
);

asort($personalidades);
echo "20 personalidades históricas em ordem crescente <br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade."<br>";
}

arsort($personalidades);
echo "<br><br>20 personalidades históricas em ordem decrescente <br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade."<br>";
}

shuffle($personalidades);
echo "<br><br>20 personalidades históricas em ordem aleatória <br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade."<br>";
}
?>