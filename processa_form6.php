<?php

echo "Formulário de Alunos <br><br>";
echo "Nome: ".$_POST["nome"]."<br><br>";
echo "Turma: ";
if($_POST["turma"] == "M"){
    echo "Manhã <br><br>";
}elseif($_POST["turma"] == "T"){
    echo "Tarde <br><br>";
}elseif($_POST["turma"] == "N"){
    echo "Noite <br><br>";
}else{
    echo "Aluno não informou o período de aula! Por favor, especifique o período!";
}

echo "Materias: ";
foreach($_POST["materias"] as $materia){
    echo $materia." , ";
}

echo "<br><br>Conte-nos por que devemos escolher você: ".$_POST["pedido"]."<br><br>";

echo "E-mail: ".$_POST["email"]."<br><br>";
echo "Senha: ".$_POST["senha"];

?>