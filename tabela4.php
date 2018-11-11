<?php

    $query = $_GET["q"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Usuários</title>
    </head>
    <style>
        table{
            font-family: arial, sans-serif;
            border-collapse:collapse; 
            width:100%;
        }
        th, td{
            border: 1px solid black;
            text-align: left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:silver;
        }
    </style>
    <body>

        <form action="tabela4.php" method="GET">
            <input type="text" name="q" />
            <input type ="submit" value="Pesquisar" />
        </form>
        <br>

        <?php

        $servidor = "cursophpleo_db_1";
        $usuario = "root";
        $senha = "phprs";
        $banco = "curso-php";

        $conn = new mysqli($servidor, $usuario, $senha, $banco);

        if($conn->connect_error){
            die("A conexão falhou: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM usuarios";
        if($query != ""){
            $sql .= " WHERE email LIKE '%".$query."%'";
        }

        $result = $conn->query($sql);

        if($result->num_rows > 0){
        echo $result->num_rows." registros listados!<br><br>";
        echo "<a href='Formusuarios5.php'>Incluir novo usuário</a><br><br>";
        echo "<table>";
        echo    "<tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Status</th>
                    <th></th>
                </tr>";

        while($row = $result->fetch_assoc()){

            echo "<tr>";

            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["senha"]."</td>";
            echo "<td>".$row["status"]."</td>";
            echo "<td>";
            echo "<a href='apagarusuario3.php?id=".$row["ID"]."'>Apagar</a>";
            echo "&nbsp;|&nbsp;";
            echo "<a href='Formusuarios5.php?id=".$row["ID"]."'>Editar</a>";
            echo "</td>";
            
            echo "</tr>";
        }

            echo "</table>";

        }else{
            echo "Não retornou nenhum registro!";
        }

        ?>
    </body>
</html>