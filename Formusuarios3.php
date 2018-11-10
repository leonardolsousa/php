<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuários</title>
    </head>
    <body>
        <form action="gravar_usuario3.php" method="POST">
            <label>Email</label><br>
            <input type="text" name="email"/><br><br>

            <label>Senha</label><br>
            <input type="password" name="pass"/><br><br>

            <label>Status</label><br>
            <select name="status">
                <option value="0">0 (Inativo)</option>
                <option value="1">1 (Ativo)</option>
            </select>
            <br><br>

            <input type="submit" value="Gravar dados"/><br>

        </form>
    </body>
</html>