<?php

echo "Formulário de Alunos <br><br>";
echo "Nome: ".$_POST["nome"]."<br><br>";
echo "Turma: ";
if($_POST["turma"] == "M"){
    echo "Manhã <br>";
}elseif($_POST["turma"] == "T"){
    echo "Tarde <br>";
}elseif($_POST["turma"] == "N"){
    echo "Noite <br>";
}else{
    echo "Aluno não informou o período de aula! Por favor, especifique o período!";
}

?>