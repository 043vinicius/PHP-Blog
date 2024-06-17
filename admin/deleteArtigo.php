<?php
    include("../database.php");
    session_start();

    $id = $_GET['id'];

    $sql = "DELETE FROM artigos WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        echo "Artigo removido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    header("Location: /projeto/admin/escritor.php");
    $conexao->close();