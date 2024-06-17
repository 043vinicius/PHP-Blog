<?php
    include("./database.php");
    session_start();

    $comentario = $_POST['comentario'];
    $artigo_id = $_POST['artigo_id'];

    $sql = "INSERT INTO comentarios (comentario, artigo_id) VALUES ('$comentario', $artigo_id)";
    if ($conexao->query($sql) === TRUE) {
        echo "Comentário adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    header("Location: /projeto/artigo.php?id=$artigo_id");
    $conexao->close();