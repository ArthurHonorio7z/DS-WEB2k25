<?php
    $db= new PDO("mysql:host=localhost; dbname=pdo", "root", "");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($_POST['formulario'] == 'cliente') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
        

        $statement = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?,?)");
        $executar = $statement ->execute(array("$nome", "$email"));
        
        if ($executar) {
            header(header: "Location: index.php?");
            exit;
        } else {
            header(header: "Location: index.php?");
            exit;
        }
        }
    }
?>