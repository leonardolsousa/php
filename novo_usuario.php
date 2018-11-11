<?php

    session_start();
    

?>

<form action="incluir_usuario.php" method="POST">
    <label>Email</label><br>
    <input type="text" name="email"><br><br>

    <label>Senha</label><br>
    <input type="password" name="pass"><br><br>

    <label>Confirmar senha</label><br>
    <input type="password" name="confirmar_pass"><br><br>

    <input type="submit" value="Cadastrar"/>

