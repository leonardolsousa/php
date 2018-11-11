<?php

require_once("conexaobd.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = (isset($_POST['email'])) ? $_POST['email'] : '';
  $pass = (isset($_POST['senha'])) ? $_POST['senha'] : '';
  
  if(validaUsuario($email, $senha) == TRUE) {
    header("Location: Index.php");
  }else{
    header("Location: login.php");
  }
}

?>