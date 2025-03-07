<?php
    include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div = class="container">
        <div class="cadastro">
                <form action="connection.php" method="POST">
                    <h3>Cliente</h3>
                    
                    <label>Nome :</label>
                    <input type="text" name="nome" required>
                    <label>Email :</label>
                    <input type="email" name="email" required>
                    <input type="submit" value="cliente" name = "formulario">
                </form>
                <br>
        </div>
        <div class= "tabela">
        <?php
        echo "<h2>Exemplo de consulta com muitas linhas</h2>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
        foreach($todos as $linha){
            echo "Linha: ".$linha['id']."<br>";
            echo "Nome: ".$linha['nome']."<br>";
            echo "E-mail: ".$linha['email']."<br>";
        }
        ?>
        </div>
    </div>
</body>
</html>