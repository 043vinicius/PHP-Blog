<?php
    include("../database.php");
    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_SESSION['escritor_id'];

    $sql = "UPDATE escritores SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        echo "Escritor atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    header("Location: /projeto/admin/escritor.php");
    $conexao->close();